<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'owners_list_access',
            ],
            [
                'id'    => '18',
                'title' => 'owner_create',
            ],
            [
                'id'    => '19',
                'title' => 'owner_edit',
            ],
            [
                'id'    => '20',
                'title' => 'owner_show',
            ],
            [
                'id'    => '21',
                'title' => 'owner_delete',
            ],
            [
                'id'    => '22',
                'title' => 'owner_access',
            ],
            [
                'id'    => '23',
                'title' => 'nastavenium_access',
            ],
            [
                'id'    => '24',
                'title' => 'non_crud_access',
            ],
            [
                'id'    => '25',
                'title' => 'typeproperty_create',
            ],
            [
                'id'    => '26',
                'title' => 'typeproperty_edit',
            ],
            [
                'id'    => '27',
                'title' => 'typeproperty_show',
            ],
            [
                'id'    => '28',
                'title' => 'typeproperty_delete',
            ],
            [
                'id'    => '29',
                'title' => 'typeproperty_access',
            ],
            [
                'id'    => '30',
                'title' => 'typelease_create',
            ],
            [
                'id'    => '31',
                'title' => 'typelease_edit',
            ],
            [
                'id'    => '32',
                'title' => 'typelease_show',
            ],
            [
                'id'    => '33',
                'title' => 'typelease_delete',
            ],
            [
                'id'    => '34',
                'title' => 'typelease_access',
            ],
            [
                'id'    => '35',
                'title' => 'hlavnemenu_access',
            ],
            [
                'id'    => '36',
                'title' => 'lease_create',
            ],
            [
                'id'    => '37',
                'title' => 'lease_edit',
            ],
            [
                'id'    => '38',
                'title' => 'lease_show',
            ],
            [
                'id'    => '39',
                'title' => 'lease_delete',
            ],
            [
                'id'    => '40',
                'title' => 'lease_access',
            ],
            [
                'id'    => '41',
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => '42',
                'title' => 'crm_status_create',
            ],
            [
                'id'    => '43',
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => '44',
                'title' => 'crm_status_show',
            ],
            [
                'id'    => '45',
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => '46',
                'title' => 'crm_status_access',
            ],
            [
                'id'    => '47',
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => '48',
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => '49',
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => '50',
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => '51',
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => '52',
                'title' => 'crm_note_create',
            ],
            [
                'id'    => '53',
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => '54',
                'title' => 'crm_note_show',
            ],
            [
                'id'    => '55',
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => '56',
                'title' => 'crm_note_access',
            ],
            [
                'id'    => '57',
                'title' => 'crm_document_create',
            ],
            [
                'id'    => '58',
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => '59',
                'title' => 'crm_document_show',
            ],
            [
                'id'    => '60',
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => '61',
                'title' => 'crm_document_access',
            ],
            [
                'id'    => '62',
                'title' => 'task_management_access',
            ],
            [
                'id'    => '63',
                'title' => 'task_status_create',
            ],
            [
                'id'    => '64',
                'title' => 'task_status_edit',
            ],
            [
                'id'    => '65',
                'title' => 'task_status_show',
            ],
            [
                'id'    => '66',
                'title' => 'task_status_delete',
            ],
            [
                'id'    => '67',
                'title' => 'task_status_access',
            ],
            [
                'id'    => '68',
                'title' => 'task_tag_create',
            ],
            [
                'id'    => '69',
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => '70',
                'title' => 'task_tag_show',
            ],
            [
                'id'    => '71',
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => '72',
                'title' => 'task_tag_access',
            ],
            [
                'id'    => '73',
                'title' => 'task_create',
            ],
            [
                'id'    => '74',
                'title' => 'task_edit',
            ],
            [
                'id'    => '75',
                'title' => 'task_show',
            ],
            [
                'id'    => '76',
                'title' => 'task_delete',
            ],
            [
                'id'    => '77',
                'title' => 'task_access',
            ],
            [
                'id'    => '78',
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => '79',
                'title' => 'contact_management_access',
            ],
            [
                'id'    => '80',
                'title' => 'contact_company_create',
            ],
            [
                'id'    => '81',
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => '82',
                'title' => 'contact_company_show',
            ],
            [
                'id'    => '83',
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => '84',
                'title' => 'contact_company_access',
            ],
            [
                'id'    => '85',
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => '86',
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => '87',
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => '88',
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => '89',
                'title' => 'contact_contact_access',
            ],
        ];

        Permission::insert($permissions);

    }
}
