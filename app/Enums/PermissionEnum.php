<?php

namespace App\Enums;

enum PermissionEnum: string
{
    case ACCESS_DASHBOARD = 'access-dashboard';

        // CLIENTI
    case LIST_CUSTOMERS = 'list-customers';
    case VIEW_CUSTOMERS = 'view-customers';
    case CREATE_CUSTOMERS = 'create-customers';
    case EDIT_CUSTOMERS = 'edit-customers';
    case DELETE_CUSTOMERS = 'delete-customers';

        // FORNITORI
    case LIST_SUPPLIERS = 'list-suppliers';
    case VIEW_SUPPLIERS = 'view-suppliers';
    case CREATE_SUPPLIERS = 'create-suppliers';
    case EDIT_SUPPLIERS = 'edit-suppliers';
    case DELETE_SUPPLIERS = 'delete-suppliers';

        // TECNICI
    case LIST_TECHNICIANS = 'list-technicians';
    case VIEW_TECHNICIANS = 'view-technicians';
    case CREATE_TECHNICIANS = 'create-technicians';
    case EDIT_TECHNICIANS = 'edit-technicians';
    case DELETE_TECHNICIANS = 'delete-technicians';

        // PIANIFICAZIONE
    case ACCESS_CALENDAR = 'access-calendar';

        // INTERVENTI
    case LIST_OPERATIONS = 'list-operations';
    case VIEW_OPERATIONS = 'view-operations';
    case CREATE_OPERATIONS = 'create-operations';
    case EDIT_OPERATIONS = 'edit-operations';
    case DELETE_OPERATIONS = 'delete-operations';

        // PREVENTIVI
    case LIST_QUOTES = 'list-quotes';
    case VIEW_QUOTES = 'view-quotes';
    case CREATE_QUOTES = 'create-quotes';
    case EDIT_QUOTES = 'edit-quotes';
    case DELETE_QUOTES = 'delete-quotes';

        // CONTRATTI
    case LIST_CONTRACTS = 'list-contracts';
    case VIEW_CONTRACTS = 'view-contracts';
    case CREATE_CONTRACTS = 'create-contracts';
    case EDIT_CONTRACTS = 'edit-contracts';
    case DELETE_CONTRACTS = 'delete-contracts';

        // DOCUMENTI
    case LIST_DOCUMENTS = 'list-documents';
    case VIEW_DOCUMENTS = 'view-documents';
    case CREATE_DOCUMENTS = 'create-documents';
    case EDIT_DOCUMENTS = 'edit-documents';
    case DELETE_DOCUMENTS = 'delete-documents';

        // FATTURAZIONE
    case LIST_INVOICES = 'list-invoices';
    case VIEW_INVOICES = 'view-invoices';
    case CREATE_INVOICES = 'create-invoices';
    case EDIT_INVOICES = 'edit-invoices';
    case DELETE_INVOICES = 'delete-invoices';

        // DDT
    case LIST_DELIVERY_NOTES = 'list-delivery-notes';
    case VIEW_DELIVERY_NOTES = 'view-delivery-notes';
    case CREATE_DELIVERY_NOTES = 'create-delivery-notes';
    case EDIT_DELIVERY_NOTES = 'edit-delivery-notes';
    case DELETE_DELIVERY_NOTES = 'delete-delivery-notes';

        // APPROVVIGIONAMENTO
    case LIST_PURCHASE_ORDERS = 'list-purchase-orders';
    case VIEW_PURCHASE_ORDERS = 'view-purchase-orders';
    case CREATE_PURCHASE_ORDERS = 'create-purchase-orders';
    case EDIT_PURCHASE_ORDERS = 'edit-purchase-orders';
    case DELETE_PURCHASE_ORDERS = 'delete-purchase-orders';

        // NOTE DI CREDITO
    case LIST_CREDIT_NOTES = 'list-credit-notes';
    case VIEW_CREDIT_NOTES = 'view-credit-notes';
    case CREATE_CREDIT_NOTES = 'create-credit-notes';
    case EDIT_CREDIT_NOTES = 'edit-credit-notes';
    case DELETE_CREDIT_NOTES = 'delete-credit-notes';

        // MAGAZZINO
    case LIST_PRODUCTS = 'list-products';
    case VIEW_PRODUCTS = 'view-products';
    case CREATE_PRODUCTS = 'create-products';
    case EDIT_PRODUCTS = 'edit-products';
    case DELETE_PRODUCTS = 'delete-products';

        // PAGAMENTI
    case LIST_PAYMENTS = 'list-payments';
    case VIEW_PAYMENTS = 'view-payments';
    case CREATE_PAYMENTS = 'create-payments';
    case EDIT_PAYMENTS = 'edit-payments';
    case DELETE_PAYMENTS = 'delete-payments';
}
