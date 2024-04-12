<?php

namespace Modules\Transfer\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Transfer extends BaseModel
{

    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['id', 'amount', 'currency', 'token', 'description', 'params', 'is_canceled', 'from_partner_id', 'gateway_id', 'to_partner_id'];

    /**
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = [
        'fields' => ['from_partner_id__name', 'to_partner_id__name', 'gateway_id__title', 'amount'],
        'template' => "[from_partner_id__name] -[to_partner_id__name] ([gateway_id__title] [amount])",
    ];

    /**
     * List of tables names that are need in this model during migration.
     *
     * @var array<string>
     */
    public array $migrationDependancy = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "transfer_transfer";

    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function fields(Blueprint $table = null): void
    {
        $this->fields = $table ?? new Blueprint($this->table);

        $this->fields->increments('id')->html('hidden');
        $this->fields->decimal('amount', 11)->nullable()->html('amount');
        $this->fields->string('currency_id')->nullable()->html('recordpicker')->relation(['core', 'currency']);
        $this->fields->string('token')->nullable()->html('text');
        $this->fields->longText('description')->nullable()->html('textarea');
        $this->fields->longText('params')->nullable()->html('textarea');
        $this->fields->boolean('is_canceled')->nullable()->html('switch')->default(false);
        $this->fields->integer('from_partner_id')->nullable()->html('recordpicker')->relation(['partner']);
        $this->fields->integer('to_partner_id')->nullable()->html('recordpicker')->relation(['partner']);
        $this->fields->bigInteger('gateway_id')->nullable()->html('recordpicker')->relation(['account', 'gateway']);

    }

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {
        $structure['table'] = ['from_partner_id', 'to_partner_id', 'gateway_id', 'amount'];
        $structure['form'] =[
            ['label' => 'Transfer Detail', 'class' => 'col-span-full md:col-span-6 md:pr-2', 'fields' => ['from_partner_id', 'to_partner_id', 'gateway_id', 'amount', 'currency_id']],
            ['label' => 'Transfer Setting', 'class' => 'col-span-full md:col-span-6 md:pr-2', 'fields' => ['token', 'is_canceled', 'from_partner_id', 'to_partner_id']],
            ['label' => 'Transfer Description', 'class' => 'col-span-full md:col-span-6 md:pr-2', 'fields' => ['description', 'params']],
        ];
        $structure['filter'] = ['from_partner_id', 'to_partner_id', 'gateway_id', 'amount'];
        return $structure;
    }


    /**
     * Define rights for this model.
     *
     * @return array
     */
    public function rights(): array
    {

    }
}
