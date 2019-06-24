<?php

namespace SForce\Wsdl;

class StatusCode
{
    const __default = 'ALL_OR_NONE_OPERATION_ROLLED_BACK';
    const ALL_OR_NONE_OPERATION_ROLLED_BACK = 'ALL_OR_NONE_OPERATION_ROLLED_BACK';
    const ALREADY_IN_PROCESS = 'ALREADY_IN_PROCESS';
    const APEX_DATA_ACCESS_RESTRICTION = 'APEX_DATA_ACCESS_RESTRICTION';
    const ASSIGNEE_TYPE_REQUIRED = 'ASSIGNEE_TYPE_REQUIRED';
    const AURA_COMPILE_ERROR = 'AURA_COMPILE_ERROR';
    const AUTH_PROVIDER_NEEDS_AUTH = 'AUTH_PROVIDER_NEEDS_AUTH';
    const AUTH_PROVIDER_NOT_FOUND = 'AUTH_PROVIDER_NOT_FOUND';
    const BAD_CUSTOM_ENTITY_PARENT_DOMAIN = 'BAD_CUSTOM_ENTITY_PARENT_DOMAIN';
    const BCC_NOT_ALLOWED_IF_BCC_COMPLIANCE_ENABLED = 'BCC_NOT_ALLOWED_IF_BCC_COMPLIANCE_ENABLED';
    const CANNOT_CASCADE_PRODUCT_ACTIVE = 'CANNOT_CASCADE_PRODUCT_ACTIVE';
    const CANNOT_CHANGE_FIELD_TYPE_OF_APEX_REFERENCED_FIELD = 'CANNOT_CHANGE_FIELD_TYPE_OF_APEX_REFERENCED_FIELD';
    const CANNOT_CHANGE_FIELD_TYPE_OF_REFERENCED_FIELD = 'CANNOT_CHANGE_FIELD_TYPE_OF_REFERENCED_FIELD';
    const CANNOT_CREATE_ANOTHER_MANAGED_PACKAGE = 'CANNOT_CREATE_ANOTHER_MANAGED_PACKAGE';
    const CANNOT_DEACTIVATE_DIVISION = 'CANNOT_DEACTIVATE_DIVISION';
    const CANNOT_DELETE_GLOBAL_ACTION_LIST = 'CANNOT_DELETE_GLOBAL_ACTION_LIST';
    const CANNOT_DELETE_LAST_DATED_CONVERSION_RATE = 'CANNOT_DELETE_LAST_DATED_CONVERSION_RATE';
    const CANNOT_DELETE_MANAGED_OBJECT = 'CANNOT_DELETE_MANAGED_OBJECT';
    const CANNOT_DISABLE_LAST_ADMIN = 'CANNOT_DISABLE_LAST_ADMIN';
    const CANNOT_ENABLE_IP_RESTRICT_REQUESTS = 'CANNOT_ENABLE_IP_RESTRICT_REQUESTS';
    const CANNOT_EXECUTE_FLOW_TRIGGER = 'CANNOT_EXECUTE_FLOW_TRIGGER';
    const CANNOT_FREEZE_SELF = 'CANNOT_FREEZE_SELF';
    const CANNOT_INSERT_UPDATE_ACTIVATE_ENTITY = 'CANNOT_INSERT_UPDATE_ACTIVATE_ENTITY';
    const CANNOT_MODIFY_MANAGED_OBJECT = 'CANNOT_MODIFY_MANAGED_OBJECT';
    const CANNOT_PASSWORD_LOCKOUT = 'CANNOT_PASSWORD_LOCKOUT';
    const CANNOT_POST_TO_ARCHIVED_GROUP = 'CANNOT_POST_TO_ARCHIVED_GROUP';
    const CANNOT_RENAME_APEX_REFERENCED_FIELD = 'CANNOT_RENAME_APEX_REFERENCED_FIELD';
    const CANNOT_RENAME_APEX_REFERENCED_OBJECT = 'CANNOT_RENAME_APEX_REFERENCED_OBJECT';
    const CANNOT_RENAME_REFERENCED_FIELD = 'CANNOT_RENAME_REFERENCED_FIELD';
    const CANNOT_RENAME_REFERENCED_OBJECT = 'CANNOT_RENAME_REFERENCED_OBJECT';
    const CANNOT_REPARENT_RECORD = 'CANNOT_REPARENT_RECORD';
    const CANNOT_UPDATE_CONVERTED_LEAD = 'CANNOT_UPDATE_CONVERTED_LEAD';
    const CANT_DISABLE_CORP_CURRENCY = 'CANT_DISABLE_CORP_CURRENCY';
    const CANT_UNSET_CORP_CURRENCY = 'CANT_UNSET_CORP_CURRENCY';
    const CHILD_SHARE_FAILS_PARENT = 'CHILD_SHARE_FAILS_PARENT';
    const CIRCULAR_DEPENDENCY = 'CIRCULAR_DEPENDENCY';
    const CLEAN_SERVICE_ERROR = 'CLEAN_SERVICE_ERROR';
    const COLLISION_DETECTED = 'COLLISION_DETECTED';
    const COMMERCIAL_CONTROL_ERROR = 'COMMERCIAL_CONTROL_ERROR';
    const COMMUNITY_NOT_ACCESSIBLE = 'COMMUNITY_NOT_ACCESSIBLE';
    const CONFLICTING_ENVIRONMENT_HUB_MEMBER = 'CONFLICTING_ENVIRONMENT_HUB_MEMBER';
    const CONFLICTING_SSO_USER_MAPPING = 'CONFLICTING_SSO_USER_MAPPING';
    const CUSTOM_APEX_ERROR = 'CUSTOM_APEX_ERROR';
    const CUSTOM_CLOB_FIELD_LIMIT_EXCEEDED = 'CUSTOM_CLOB_FIELD_LIMIT_EXCEEDED';
    const CUSTOM_ENTITY_OR_FIELD_LIMIT = 'CUSTOM_ENTITY_OR_FIELD_LIMIT';
    const CUSTOM_FIELD_INDEX_LIMIT_EXCEEDED = 'CUSTOM_FIELD_INDEX_LIMIT_EXCEEDED';
    const CUSTOM_INDEX_EXISTS = 'CUSTOM_INDEX_EXISTS';
    const CUSTOM_LINK_LIMIT_EXCEEDED = 'CUSTOM_LINK_LIMIT_EXCEEDED';
    const CUSTOM_METADATA_LIMIT_EXCEEDED = 'CUSTOM_METADATA_LIMIT_EXCEEDED';
    const CUSTOM_METADATA_REL_FIELD_MANAGEABILITY = 'CUSTOM_METADATA_REL_FIELD_MANAGEABILITY';
    const CUSTOM_SETTINGS_LIMIT_EXCEEDED = 'CUSTOM_SETTINGS_LIMIT_EXCEEDED';
    const CUSTOM_TAB_LIMIT_EXCEEDED = 'CUSTOM_TAB_LIMIT_EXCEEDED';
    const DATAASSESSMENT_CONFIG_ASSESSMENT_IN_PROGRESS_ERROR = 'DATAASSESSMENT_CONFIG_ASSESSMENT_IN_PROGRESS_ERROR';
    const DATAASSESSMENT_CONFIG_SERVICE_ERROR = 'DATAASSESSMENT_CONFIG_SERVICE_ERROR';
    const DATACLOUDADDRESS_NO_RECORDS_FOUND = 'DATACLOUDADDRESS_NO_RECORDS_FOUND';
    const DATACLOUDADDRESS_PROCESSING_ERROR = 'DATACLOUDADDRESS_PROCESSING_ERROR';
    const DATACLOUDADDRESS_SERVER_ERROR = 'DATACLOUDADDRESS_SERVER_ERROR';
    const DELETE_FAILED = 'DELETE_FAILED';
    const DELETE_NOT_ALLOWED = 'DELETE_NOT_ALLOWED';
    const DELETE_OPERATION_TOO_LARGE = 'DELETE_OPERATION_TOO_LARGE';
    const DELETE_REQUIRED_ON_CASCADE = 'DELETE_REQUIRED_ON_CASCADE';
    const DEPENDENCY_EXISTS = 'DEPENDENCY_EXISTS';
    const DUPLICATES_DETECTED = 'DUPLICATES_DETECTED';
    const DUPLICATE_CASE_SOLUTION = 'DUPLICATE_CASE_SOLUTION';
    const DUPLICATE_COMM_NICKNAME = 'DUPLICATE_COMM_NICKNAME';
    const DUPLICATE_CUSTOM_ENTITY_DEFINITION = 'DUPLICATE_CUSTOM_ENTITY_DEFINITION';
    const DUPLICATE_CUSTOM_TAB_MOTIF = 'DUPLICATE_CUSTOM_TAB_MOTIF';
    const DUPLICATE_DEVELOPER_NAME = 'DUPLICATE_DEVELOPER_NAME';
    const DUPLICATE_EXTERNAL_ID = 'DUPLICATE_EXTERNAL_ID';
    const DUPLICATE_MASTER_LABEL = 'DUPLICATE_MASTER_LABEL';
    const DUPLICATE_SENDER_DISPLAY_NAME = 'DUPLICATE_SENDER_DISPLAY_NAME';
    const DUPLICATE_USERNAME = 'DUPLICATE_USERNAME';
    const DUPLICATE_VALUE = 'DUPLICATE_VALUE';
    const EMAIL_ADDRESS_BOUNCED = 'EMAIL_ADDRESS_BOUNCED';
    const EMAIL_EXTERNAL_TRANSPORT_CONNECTION_ERROR = 'EMAIL_EXTERNAL_TRANSPORT_CONNECTION_ERROR';
    const EMAIL_EXTERNAL_TRANSPORT_PERMISSION_ERROR = 'EMAIL_EXTERNAL_TRANSPORT_PERMISSION_ERROR';
    const EMAIL_EXTERNAL_TRANSPORT_TOKEN_ERROR = 'EMAIL_EXTERNAL_TRANSPORT_TOKEN_ERROR';
    const EMAIL_EXTERNAL_TRANSPORT_TOO_MANY_REQUESTS_ERROR = 'EMAIL_EXTERNAL_TRANSPORT_TOO_MANY_REQUESTS_ERROR';
    const EMAIL_EXTERNAL_TRANSPORT_UNKNOWN_ERROR = 'EMAIL_EXTERNAL_TRANSPORT_UNKNOWN_ERROR';
    const EMAIL_NOT_PROCESSED_DUE_TO_PRIOR_ERROR = 'EMAIL_NOT_PROCESSED_DUE_TO_PRIOR_ERROR';
    const EMAIL_OPTED_OUT = 'EMAIL_OPTED_OUT';
    const EMAIL_TEMPLATE_FORMULA_ERROR = 'EMAIL_TEMPLATE_FORMULA_ERROR';
    const EMAIL_TEMPLATE_MERGEFIELD_ACCESS_ERROR = 'EMAIL_TEMPLATE_MERGEFIELD_ACCESS_ERROR';
    const EMAIL_TEMPLATE_MERGEFIELD_ERROR = 'EMAIL_TEMPLATE_MERGEFIELD_ERROR';
    const EMAIL_TEMPLATE_MERGEFIELD_VALUE_ERROR = 'EMAIL_TEMPLATE_MERGEFIELD_VALUE_ERROR';
    const EMAIL_TEMPLATE_PROCESSING_ERROR = 'EMAIL_TEMPLATE_PROCESSING_ERROR';
    const EMPTY_SCONTROL_FILE_NAME = 'EMPTY_SCONTROL_FILE_NAME';
    const ENHANCED_EMAIL_TEMPLATE_COMPILATION_ERROR = 'ENHANCED_EMAIL_TEMPLATE_COMPILATION_ERROR';
    const ENTITY_FAILED_IFLASTMODIFIED_ON_UPDATE = 'ENTITY_FAILED_IFLASTMODIFIED_ON_UPDATE';
    const ENTITY_IS_ARCHIVED = 'ENTITY_IS_ARCHIVED';
    const ENTITY_IS_DELETED = 'ENTITY_IS_DELETED';
    const ENTITY_IS_LOCKED = 'ENTITY_IS_LOCKED';
    const ENTITY_SAVE_ERROR = 'ENTITY_SAVE_ERROR';
    const ENTITY_SAVE_VALIDATION_ERROR = 'ENTITY_SAVE_VALIDATION_ERROR';
    const ENVIRONMENT_HUB_MEMBERSHIP_CONFLICT = 'ENVIRONMENT_HUB_MEMBERSHIP_CONFLICT';
    const ENVIRONMENT_HUB_MEMBERSHIP_ERROR_JOINING_HUB = 'ENVIRONMENT_HUB_MEMBERSHIP_ERROR_JOINING_HUB';
    const ENVIRONMENT_HUB_MEMBERSHIP_USER_ALREADY_IN_HUB = 'ENVIRONMENT_HUB_MEMBERSHIP_USER_ALREADY_IN_HUB';
    const ENVIRONMENT_HUB_MEMBERSHIP_USER_NOT_ORG_ADMIN = 'ENVIRONMENT_HUB_MEMBERSHIP_USER_NOT_ORG_ADMIN';
    const ERROR_IN_MAILER = 'ERROR_IN_MAILER';
    const EXCHANGE_WEB_SERVICES_URL_INVALID = 'EXCHANGE_WEB_SERVICES_URL_INVALID';
    const EXTERNAL_RESOURCE_FORBIDDEN = 'EXTERNAL_RESOURCE_FORBIDDEN';
    const FAILED_ACTIVATION = 'FAILED_ACTIVATION';
    const FIELD_CUSTOM_VALIDATION_EXCEPTION = 'FIELD_CUSTOM_VALIDATION_EXCEPTION';
    const FIELD_FILTER_VALIDATION_EXCEPTION = 'FIELD_FILTER_VALIDATION_EXCEPTION';
    const FIELD_INTEGRITY_EXCEPTION = 'FIELD_INTEGRITY_EXCEPTION';
    const FIELD_KEYWORD_LIST_MATCH_LIMIT = 'FIELD_KEYWORD_LIST_MATCH_LIMIT';
    const FIELD_MAPPING_ERROR = 'FIELD_MAPPING_ERROR';
    const FIELD_MODERATION_RULE_BLOCK = 'FIELD_MODERATION_RULE_BLOCK';
    const FIELD_NOT_UPDATABLE = 'FIELD_NOT_UPDATABLE';
    const FILE_EXTENSION_NOT_ALLOWED = 'FILE_EXTENSION_NOT_ALLOWED';
    const FILE_SIZE_LIMIT_EXCEEDED = 'FILE_SIZE_LIMIT_EXCEEDED';
    const FILTERED_LOOKUP_LIMIT_EXCEEDED = 'FILTERED_LOOKUP_LIMIT_EXCEEDED';
    const FIND_DUPLICATES_ERROR = 'FIND_DUPLICATES_ERROR';
    const FLOW_EXCEPTION = 'FLOW_EXCEPTION';
    const FUNCTIONALITY_NOT_ENABLED = 'FUNCTIONALITY_NOT_ENABLED';
    const HAS_PUBLIC_REFERENCES = 'HAS_PUBLIC_REFERENCES';
    const HTML_FILE_UPLOAD_NOT_ALLOWED = 'HTML_FILE_UPLOAD_NOT_ALLOWED';
    const IMAGE_TOO_LARGE = 'IMAGE_TOO_LARGE';
    const INACTIVE_OWNER_OR_USER = 'INACTIVE_OWNER_OR_USER';
    const INACTIVE_RULE_ERROR = 'INACTIVE_RULE_ERROR';
    const INSERT_UPDATE_DELETE_NOT_ALLOWED_DURING_MAINTENANCE = 'INSERT_UPDATE_DELETE_NOT_ALLOWED_DURING_MAINTENANCE';
    const INSUFFICIENT_ACCESS_ON_CROSS_REFERENCE_ENTITY = 'INSUFFICIENT_ACCESS_ON_CROSS_REFERENCE_ENTITY';
    const INSUFFICIENT_ACCESS_OR_READONLY = 'INSUFFICIENT_ACCESS_OR_READONLY';
    const INSUFFICIENT_ACCESS_TO_INSIGHTSEXTERNALDATA = 'INSUFFICIENT_ACCESS_TO_INSIGHTSEXTERNALDATA';
    const INSUFFICIENT_CREDITS = 'INSUFFICIENT_CREDITS';
    const INTERNAL_ERROR = 'INTERNAL_ERROR';
    const INVALID_ACCESS_LEVEL = 'INVALID_ACCESS_LEVEL';
    const INVALID_ACCESS_TOKEN = 'INVALID_ACCESS_TOKEN';
    const INVALID_API_INPUT = 'INVALID_API_INPUT';
    const INVALID_ARGUMENT_TYPE = 'INVALID_ARGUMENT_TYPE';
    const INVALID_ASSIGNEE_TYPE = 'INVALID_ASSIGNEE_TYPE';
    const INVALID_ASSIGNMENT_RULE = 'INVALID_ASSIGNMENT_RULE';
    const INVALID_AUTH_HEADER = 'INVALID_AUTH_HEADER';
    const INVALID_BATCH_OPERATION = 'INVALID_BATCH_OPERATION';
    const INVALID_CONTENT_TYPE = 'INVALID_CONTENT_TYPE';
    const INVALID_CREDIT_CARD_INFO = 'INVALID_CREDIT_CARD_INFO';
    const INVALID_CROSS_REFERENCE_KEY = 'INVALID_CROSS_REFERENCE_KEY';
    const INVALID_CROSS_REFERENCE_TYPE_FOR_FIELD = 'INVALID_CROSS_REFERENCE_TYPE_FOR_FIELD';
    const INVALID_CURRENCY_CONV_RATE = 'INVALID_CURRENCY_CONV_RATE';
    const INVALID_CURRENCY_CORP_RATE = 'INVALID_CURRENCY_CORP_RATE';
    const INVALID_CURRENCY_ISO = 'INVALID_CURRENCY_ISO';
    const INVALID_DATASET_REFERENCE_INPUT = 'INVALID_DATASET_REFERENCE_INPUT';
    const INVALID_DATA_CATEGORY_GROUP_REFERENCE = 'INVALID_DATA_CATEGORY_GROUP_REFERENCE';
    const INVALID_DATA_URI = 'INVALID_DATA_URI';
    const INVALID_EMAIL_ADDRESS = 'INVALID_EMAIL_ADDRESS';
    const INVALID_EMPTY_KEY_OWNER = 'INVALID_EMPTY_KEY_OWNER';
    const INVALID_ENTITY_FOR_MATCH_ENGINE_ERROR = 'INVALID_ENTITY_FOR_MATCH_ENGINE_ERROR';
    const INVALID_ENTITY_FOR_MATCH_OPERATION_ERROR = 'INVALID_ENTITY_FOR_MATCH_OPERATION_ERROR';
    const INVALID_ENTITY_FOR_UPSERT = 'INVALID_ENTITY_FOR_UPSERT';
    const INVALID_ENVIRONMENT_HUB_MEMBER = 'INVALID_ENVIRONMENT_HUB_MEMBER';
    const INVALID_EVENT_DELIVERY = 'INVALID_EVENT_DELIVERY';
    const INVALID_EVENT_INPUT = 'INVALID_EVENT_INPUT';
    const INVALID_EVENT_SUBSCRIPTION = 'INVALID_EVENT_SUBSCRIPTION';
    const INVALID_EXTENSION_ID = 'INVALID_EXTENSION_ID';
    const INVALID_FIELD = 'INVALID_FIELD';
    const INVALID_FIELD_FOR_INSERT_UPDATE = 'INVALID_FIELD_FOR_INSERT_UPDATE';
    const INVALID_FIELD_WHEN_USING_TEMPLATE = 'INVALID_FIELD_WHEN_USING_TEMPLATE';
    const INVALID_FILTER_ACTION = 'INVALID_FILTER_ACTION';
    const INVALID_GOOGLE_DOCS_URL = 'INVALID_GOOGLE_DOCS_URL';
    const INVALID_ID_FIELD = 'INVALID_ID_FIELD';
    const INVALID_INET_ADDRESS = 'INVALID_INET_ADDRESS';
    const INVALID_INPUT = 'INVALID_INPUT';
    const INVALID_KEY_FIELD_INPUT = 'INVALID_KEY_FIELD_INPUT';
    const INVALID_LINEITEM_CLONE_STATE = 'INVALID_LINEITEM_CLONE_STATE';
    const INVALID_MARKUP = 'INVALID_MARKUP';
    const INVALID_MASTER_OR_TRANSLATED_SOLUTION = 'INVALID_MASTER_OR_TRANSLATED_SOLUTION';
    const INVALID_MESSAGE_ID_REFERENCE = 'INVALID_MESSAGE_ID_REFERENCE';
    const INVALID_NAMESPACE_PREFIX = 'INVALID_NAMESPACE_PREFIX';
    const INVALID_OAUTH_URL = 'INVALID_OAUTH_URL';
    const INVALID_OPERATION = 'INVALID_OPERATION';
    const INVALID_OPERATOR = 'INVALID_OPERATOR';
    const INVALID_OR_NULL_FOR_RESTRICTED_PICKLIST = 'INVALID_OR_NULL_FOR_RESTRICTED_PICKLIST';
    const INVALID_OWNER = 'INVALID_OWNER';
    const INVALID_PACKAGE_LICENSE = 'INVALID_PACKAGE_LICENSE';
    const INVALID_PACKAGE_VERSION = 'INVALID_PACKAGE_VERSION';
    const INVALID_PARTNER_NETWORK_STATUS = 'INVALID_PARTNER_NETWORK_STATUS';
    const INVALID_PAYLOAD_VERSION = 'INVALID_PAYLOAD_VERSION';
    const INVALID_PERSON_ACCOUNT_OPERATION = 'INVALID_PERSON_ACCOUNT_OPERATION';
    const INVALID_PROVIDER_TYPE = 'INVALID_PROVIDER_TYPE';
    const INVALID_QUERY_KEY = 'INVALID_QUERY_KEY';
    const INVALID_QUERY_LOCATOR = 'INVALID_QUERY_LOCATOR';
    const INVALID_QUERY_VALUE = 'INVALID_QUERY_VALUE';
    const INVALID_READ_ONLY_USER_DML = 'INVALID_READ_ONLY_USER_DML';
    const INVALID_REFRESH_TOKEN = 'INVALID_REFRESH_TOKEN';
    const INVALID_RUNTIME_VALUE = 'INVALID_RUNTIME_VALUE';
    const INVALID_SAVE_AS_ACTIVITY_FLAG = 'INVALID_SAVE_AS_ACTIVITY_FLAG';
    const INVALID_SCS_INBOUND_USER = 'INVALID_SCS_INBOUND_USER';
    const INVALID_SESSION_ID = 'INVALID_SESSION_ID';
    const INVALID_SETUP_OWNER = 'INVALID_SETUP_OWNER';
    const INVALID_SIGNUP_COUNTRY = 'INVALID_SIGNUP_COUNTRY';
    const INVALID_SIGNUP_OPTION = 'INVALID_SIGNUP_OPTION';
    const INVALID_SITE_DELETE_EXCEPTION = 'INVALID_SITE_DELETE_EXCEPTION';
    const INVALID_SITE_FILE_IMPORTED_EXCEPTION = 'INVALID_SITE_FILE_IMPORTED_EXCEPTION';
    const INVALID_SITE_FILE_TYPE_EXCEPTION = 'INVALID_SITE_FILE_TYPE_EXCEPTION';
    const INVALID_STATUS = 'INVALID_STATUS';
    const INVALID_SUBDOMAIN = 'INVALID_SUBDOMAIN';
    const INVALID_TEXT_REPRESENTATION = 'INVALID_TEXT_REPRESENTATION';
    const INVALID_TYPE = 'INVALID_TYPE';
    const INVALID_TYPE_FOR_OPERATION = 'INVALID_TYPE_FOR_OPERATION';
    const INVALID_TYPE_ON_FIELD_IN_RECORD = 'INVALID_TYPE_ON_FIELD_IN_RECORD';
    const INVALID_USERID = 'INVALID_USERID';
    const IP_RANGE_LIMIT_EXCEEDED = 'IP_RANGE_LIMIT_EXCEEDED';
    const ITEM_NOT_FOUND = 'ITEM_NOT_FOUND';
    const JIGSAW_IMPORT_LIMIT_EXCEEDED = 'JIGSAW_IMPORT_LIMIT_EXCEEDED';
    const LICENSE_LIMIT_EXCEEDED = 'LICENSE_LIMIT_EXCEEDED';
    const LIGHT_PORTAL_USER_EXCEPTION = 'LIGHT_PORTAL_USER_EXCEPTION';
    const LIMIT_EXCEEDED = 'LIMIT_EXCEEDED';
    const MALFORMED_ID = 'MALFORMED_ID';
    const MANAGER_NOT_DEFINED = 'MANAGER_NOT_DEFINED';
    const MASSMAIL_RETRY_LIMIT_EXCEEDED = 'MASSMAIL_RETRY_LIMIT_EXCEEDED';
    const MASS_MAIL_LIMIT_EXCEEDED = 'MASS_MAIL_LIMIT_EXCEEDED';
    const MATCH_DEFINITION_ERROR = 'MATCH_DEFINITION_ERROR';
    const MATCH_OPERATION_ERROR = 'MATCH_OPERATION_ERROR';
    const MATCH_OPERATION_INVALID_ENGINE_ERROR = 'MATCH_OPERATION_INVALID_ENGINE_ERROR';
    const MATCH_OPERATION_INVALID_RULE_ERROR = 'MATCH_OPERATION_INVALID_RULE_ERROR';
    const MATCH_OPERATION_MISSING_ENGINE_ERROR = 'MATCH_OPERATION_MISSING_ENGINE_ERROR';
    const MATCH_OPERATION_MISSING_OBJECT_TYPE_ERROR = 'MATCH_OPERATION_MISSING_OBJECT_TYPE_ERROR';
    const MATCH_OPERATION_MISSING_OPTIONS_ERROR = 'MATCH_OPERATION_MISSING_OPTIONS_ERROR';
    const MATCH_OPERATION_MISSING_RULE_ERROR = 'MATCH_OPERATION_MISSING_RULE_ERROR';
    const MATCH_OPERATION_UNKNOWN_RULE_ERROR = 'MATCH_OPERATION_UNKNOWN_RULE_ERROR';
    const MATCH_OPERATION_UNSUPPORTED_VERSION_ERROR = 'MATCH_OPERATION_UNSUPPORTED_VERSION_ERROR';
    const MATCH_PRECONDITION_FAILED = 'MATCH_PRECONDITION_FAILED';
    const MATCH_RUNTIME_ERROR = 'MATCH_RUNTIME_ERROR';
    const MATCH_SERVICE_ERROR = 'MATCH_SERVICE_ERROR';
    const MATCH_SERVICE_TIMED_OUT = 'MATCH_SERVICE_TIMED_OUT';
    const MATCH_SERVICE_UNAVAILABLE_ERROR = 'MATCH_SERVICE_UNAVAILABLE_ERROR';
    const MAXIMUM_CCEMAILS_EXCEEDED = 'MAXIMUM_CCEMAILS_EXCEEDED';
    const MAXIMUM_DASHBOARD_COMPONENTS_EXCEEDED = 'MAXIMUM_DASHBOARD_COMPONENTS_EXCEEDED';
    const MAXIMUM_HIERARCHY_CHILDREN_REACHED = 'MAXIMUM_HIERARCHY_CHILDREN_REACHED';
    const MAXIMUM_HIERARCHY_LEVELS_REACHED = 'MAXIMUM_HIERARCHY_LEVELS_REACHED';
    const MAXIMUM_HIERARCHY_TREE_SIZE_REACHED = 'MAXIMUM_HIERARCHY_TREE_SIZE_REACHED';
    const MAXIMUM_SIZE_OF_ATTACHMENT = 'MAXIMUM_SIZE_OF_ATTACHMENT';
    const MAXIMUM_SIZE_OF_DOCUMENT = 'MAXIMUM_SIZE_OF_DOCUMENT';
    const MAX_ACTIONS_PER_RULE_EXCEEDED = 'MAX_ACTIONS_PER_RULE_EXCEEDED';
    const MAX_ACTIVE_RULES_EXCEEDED = 'MAX_ACTIVE_RULES_EXCEEDED';
    const MAX_APPROVAL_STEPS_EXCEEDED = 'MAX_APPROVAL_STEPS_EXCEEDED';
    const MAX_DEPTH_IN_FLOW_EXECUTION = 'MAX_DEPTH_IN_FLOW_EXECUTION';
    const MAX_FORMULAS_PER_RULE_EXCEEDED = 'MAX_FORMULAS_PER_RULE_EXCEEDED';
    const MAX_LIMIT_EXCEEDED = 'MAX_LIMIT_EXCEEDED';
    const MAX_RULES_EXCEEDED = 'MAX_RULES_EXCEEDED';
    const MAX_RULE_ENTRIES_EXCEEDED = 'MAX_RULE_ENTRIES_EXCEEDED';
    const MAX_TASK_DESCRIPTION_EXCEEEDED = 'MAX_TASK_DESCRIPTION_EXCEEEDED';
    const MAX_TM_RULES_EXCEEDED = 'MAX_TM_RULES_EXCEEDED';
    const MAX_TM_RULE_ITEMS_EXCEEDED = 'MAX_TM_RULE_ITEMS_EXCEEDED';
    const MAX_TRIGGERS_EXCEEDED = 'MAX_TRIGGERS_EXCEEDED';
    const MERGE_FAILED = 'MERGE_FAILED';
    const METADATA_FIELD_UPDATE_ERROR = 'METADATA_FIELD_UPDATE_ERROR';
    const MISSING_ARGUMENT = 'MISSING_ARGUMENT';
    const MISSING_RECORD = 'MISSING_RECORD';
    const MIXED_DML_OPERATION = 'MIXED_DML_OPERATION';
    const NONUNIQUE_SHIPPING_ADDRESS = 'NONUNIQUE_SHIPPING_ADDRESS';
    const NO_ACCESS_TOKEN = 'NO_ACCESS_TOKEN';
    const NO_ACCESS_TOKEN_FROM_REFRESH = 'NO_ACCESS_TOKEN_FROM_REFRESH';
    const NO_APPLICABLE_PROCESS = 'NO_APPLICABLE_PROCESS';
    const NO_ATTACHMENT_PERMISSION = 'NO_ATTACHMENT_PERMISSION';
    const NO_AUTH_PROVIDER = 'NO_AUTH_PROVIDER';
    const NO_INACTIVE_DIVISION_MEMBERS = 'NO_INACTIVE_DIVISION_MEMBERS';
    const NO_MASS_MAIL_PERMISSION = 'NO_MASS_MAIL_PERMISSION';
    const NO_PARTNER_PERMISSION = 'NO_PARTNER_PERMISSION';
    const NO_REFRESH_TOKEN = 'NO_REFRESH_TOKEN';
    const NO_SUCH_USER_EXISTS = 'NO_SUCH_USER_EXISTS';
    const NO_TOKEN_ENDPOINT = 'NO_TOKEN_ENDPOINT';
    const NUMBER_OUTSIDE_VALID_RANGE = 'NUMBER_OUTSIDE_VALID_RANGE';
    const NUM_HISTORY_FIELDS_BY_SOBJECT_EXCEEDED = 'NUM_HISTORY_FIELDS_BY_SOBJECT_EXCEEDED';
    const OPERATION_ENQUEUED = 'OPERATION_ENQUEUED';
    const OPTED_OUT_OF_MASS_MAIL = 'OPTED_OUT_OF_MASS_MAIL';
    const OP_WITH_INVALID_USER_TYPE_EXCEPTION = 'OP_WITH_INVALID_USER_TYPE_EXCEPTION';
    const ORCHESTRATION_INVALID = 'ORCHESTRATION_INVALID';
    const PACKAGE_DISABLED = 'PACKAGE_DISABLED';
    const PACKAGE_LICENSE_REQUIRED = 'PACKAGE_LICENSE_REQUIRED';
    const PACKAGING_API_INSTALL_FAILED = 'PACKAGING_API_INSTALL_FAILED';
    const PACKAGING_API_UNINSTALL_FAILED = 'PACKAGING_API_UNINSTALL_FAILED';
    const PALI_INVALID_ACTION_ID = 'PALI_INVALID_ACTION_ID';
    const PALI_INVALID_ACTION_NAME = 'PALI_INVALID_ACTION_NAME';
    const PALI_INVALID_ACTION_TYPE = 'PALI_INVALID_ACTION_TYPE';
    const PAL_INVALID_ASSISTANT_RECOMMENDATION_TYPE_ID = 'PAL_INVALID_ASSISTANT_RECOMMENDATION_TYPE_ID';
    const PAL_INVALID_ENTITY_ID = 'PAL_INVALID_ENTITY_ID';
    const PAL_INVALID_FLEXIPAGE_ID = 'PAL_INVALID_FLEXIPAGE_ID';
    const PAL_INVALID_LAYOUT_ID = 'PAL_INVALID_LAYOUT_ID';
    const PAL_INVALID_PARAMETERS = 'PAL_INVALID_PARAMETERS';
    const PAYLOAD_SIZE_EXCEEDED = 'PAYLOAD_SIZE_EXCEEDED';
    const PA_API_EXCEPTION = 'PA_API_EXCEPTION';
    const PA_AXIS_FAULT = 'PA_AXIS_FAULT';
    const PA_INVALID_ID_EXCEPTION = 'PA_INVALID_ID_EXCEPTION';
    const PA_NO_ACCESS_EXCEPTION = 'PA_NO_ACCESS_EXCEPTION';
    const PA_NO_DATA_FOUND_EXCEPTION = 'PA_NO_DATA_FOUND_EXCEPTION';
    const PA_URI_SYNTAX_EXCEPTION = 'PA_URI_SYNTAX_EXCEPTION';
    const PA_VISIBLE_ACTIONS_FILTER_ORDERING_EXCEPTION = 'PA_VISIBLE_ACTIONS_FILTER_ORDERING_EXCEPTION';
    const PLATFORM_EVENT_PUBLISHING_UNAVAILABLE = 'PLATFORM_EVENT_PUBLISHING_UNAVAILABLE';
    const PLATFORM_EVENT_PUBLISH_FAILED = 'PLATFORM_EVENT_PUBLISH_FAILED';
    const PORTAL_NO_ACCESS = 'PORTAL_NO_ACCESS';
    const PORTAL_USER_ALREADY_EXISTS_FOR_CONTACT = 'PORTAL_USER_ALREADY_EXISTS_FOR_CONTACT';
    const PORTAL_USER_CREATION_RESTRICTED_WITH_ENCRYPTION = 'PORTAL_USER_CREATION_RESTRICTED_WITH_ENCRYPTION';
    const PRIVATE_CONTACT_ON_ASSET = 'PRIVATE_CONTACT_ON_ASSET';
    const PROCESSING_HALTED = 'PROCESSING_HALTED';
    const QA_INVALID_CREATE_FEED_ITEM = 'QA_INVALID_CREATE_FEED_ITEM';
    const QA_INVALID_SUCCESS_MESSAGE = 'QA_INVALID_SUCCESS_MESSAGE';
    const QUERY_TIMEOUT = 'QUERY_TIMEOUT';
    const QUICK_ACTION_LIST_ITEM_NOT_ALLOWED = 'QUICK_ACTION_LIST_ITEM_NOT_ALLOWED';
    const QUICK_ACTION_LIST_NOT_ALLOWED = 'QUICK_ACTION_LIST_NOT_ALLOWED';
    const RECORD_IN_USE_BY_WORKFLOW = 'RECORD_IN_USE_BY_WORKFLOW';
    const RELATED_ENTITY_FILTER_VALIDATION_EXCEPTION = 'RELATED_ENTITY_FILTER_VALIDATION_EXCEPTION';
    const REL_FIELD_BAD_ACCESSIBILITY = 'REL_FIELD_BAD_ACCESSIBILITY';
    const REPUTATION_MINIMUM_NUMBER_NOT_REACHED = 'REPUTATION_MINIMUM_NUMBER_NOT_REACHED';
    const REQUEST_RUNNING_TOO_LONG = 'REQUEST_RUNNING_TOO_LONG';
    const REQUIRED_FEATURE_MISSING = 'REQUIRED_FEATURE_MISSING';
    const REQUIRED_FIELD_MISSING = 'REQUIRED_FIELD_MISSING';
    const REQUIRE_CONNECTED_APP_SCS = 'REQUIRE_CONNECTED_APP_SCS';
    const REQUIRE_CONNECTED_APP_SESSION_SCS = 'REQUIRE_CONNECTED_APP_SESSION_SCS';
    const REQUIRE_RUNAS_USER = 'REQUIRE_RUNAS_USER';
    const RETRIEVE_EXCHANGE_ATTACHMENT_FAILED = 'RETRIEVE_EXCHANGE_ATTACHMENT_FAILED';
    const RETRIEVE_EXCHANGE_EMAIL_FAILED = 'RETRIEVE_EXCHANGE_EMAIL_FAILED';
    const RETRIEVE_EXCHANGE_EVENT_FAILED = 'RETRIEVE_EXCHANGE_EVENT_FAILED';
    const RETRIEVE_GOOGLE_EMAIL_FAILED = 'RETRIEVE_GOOGLE_EMAIL_FAILED';
    const RETRIEVE_GOOGLE_EVENT_FAILED = 'RETRIEVE_GOOGLE_EVENT_FAILED';
    const RETRIEVE_USER_CONFIG_ERROR = 'RETRIEVE_USER_CONFIG_ERROR';
    const SALESFORCE_INBOX_TRANSPORT_CONNECTION_ERROR = 'SALESFORCE_INBOX_TRANSPORT_CONNECTION_ERROR';
    const SALESFORCE_INBOX_TRANSPORT_TOKEN_ERROR = 'SALESFORCE_INBOX_TRANSPORT_TOKEN_ERROR';
    const SALESFORCE_INBOX_TRANSPORT_UNKNOWN_ERROR = 'SALESFORCE_INBOX_TRANSPORT_UNKNOWN_ERROR';
    const SELF_REFERENCE_FROM_FLOW = 'SELF_REFERENCE_FROM_FLOW';
    const SELF_REFERENCE_FROM_TRIGGER = 'SELF_REFERENCE_FROM_TRIGGER';
    const SHARE_NEEDED_FOR_CHILD_OWNER = 'SHARE_NEEDED_FOR_CHILD_OWNER';
    const SINGLE_EMAIL_LIMIT_EXCEEDED = 'SINGLE_EMAIL_LIMIT_EXCEEDED';
    const SOCIAL_ACCOUNT_NOT_FOUND = 'SOCIAL_ACCOUNT_NOT_FOUND';
    const SOCIAL_ACTION_INVALID = 'SOCIAL_ACTION_INVALID';
    const SOCIAL_PERSONA_NOT_FOUND = 'SOCIAL_PERSONA_NOT_FOUND';
    const SOCIAL_POST_INVALID = 'SOCIAL_POST_INVALID';
    const SOCIAL_POST_NOT_FOUND = 'SOCIAL_POST_NOT_FOUND';
    const STANDARD_PRICE_NOT_DEFINED = 'STANDARD_PRICE_NOT_DEFINED';
    const STORAGE_LIMIT_EXCEEDED = 'STORAGE_LIMIT_EXCEEDED';
    const STRING_TOO_LONG = 'STRING_TOO_LONG';
    const SUBDOMAIN_IN_USE = 'SUBDOMAIN_IN_USE';
    const TABSET_LIMIT_EXCEEDED = 'TABSET_LIMIT_EXCEEDED';
    const TEMPLATE_NOT_ACTIVE = 'TEMPLATE_NOT_ACTIVE';
    const TEMPLATE_NOT_FOUND = 'TEMPLATE_NOT_FOUND';
    const TERMS_OF_SERVICE_UNREAD = 'TERMS_OF_SERVICE_UNREAD';
    const TERRITORY_REALIGN_IN_PROGRESS = 'TERRITORY_REALIGN_IN_PROGRESS';
    const TEXT_DATA_OUTSIDE_SUPPORTED_CHARSET = 'TEXT_DATA_OUTSIDE_SUPPORTED_CHARSET';
    const TOO_MANY_APEX_REQUESTS = 'TOO_MANY_APEX_REQUESTS';
    const TOO_MANY_ENUM_VALUE = 'TOO_MANY_ENUM_VALUE';
    const TOO_MANY_JOBS = 'TOO_MANY_JOBS';
    const TOO_MANY_POSSIBLE_USERS_EXIST = 'TOO_MANY_POSSIBLE_USERS_EXIST';
    const TRANSFER_REQUIRES_READ = 'TRANSFER_REQUIRES_READ';
    const UNABLE_TO_LOCK_ROW = 'UNABLE_TO_LOCK_ROW';
    const UNAVAILABLE_RECORDTYPE_EXCEPTION = 'UNAVAILABLE_RECORDTYPE_EXCEPTION';
    const UNAVAILABLE_REF = 'UNAVAILABLE_REF';
    const UNDELETE_FAILED = 'UNDELETE_FAILED';
    const UNKNOWN_EXCEPTION = 'UNKNOWN_EXCEPTION';
    const UNKNOWN_TOKEN_ERROR = 'UNKNOWN_TOKEN_ERROR';
    const UNSAFE_HTML_CONTENT = 'UNSAFE_HTML_CONTENT';
    const UNSPECIFIED_EMAIL_ADDRESS = 'UNSPECIFIED_EMAIL_ADDRESS';
    const UNSUPPORTED_APEX_TRIGGER_OPERATON = 'UNSUPPORTED_APEX_TRIGGER_OPERATON';
    const UNSUPPORTED_SOCIAL_PROVIDER = 'UNSUPPORTED_SOCIAL_PROVIDER';
    const UNVERIFIED_SENDER_ADDRESS = 'UNVERIFIED_SENDER_ADDRESS';
    const UPDATE_GOOGLE_EMAIL_LABEL_FAILED = 'UPDATE_GOOGLE_EMAIL_LABEL_FAILED';
    const USER_OWNS_PORTAL_ACCOUNT_EXCEPTION = 'USER_OWNS_PORTAL_ACCOUNT_EXCEPTION';
    const USER_WITH_APEX_SHARES_EXCEPTION = 'USER_WITH_APEX_SHARES_EXCEPTION';
    const VF_COMPILE_ERROR = 'VF_COMPILE_ERROR';
    const WEBLINK_SIZE_LIMIT_EXCEEDED = 'WEBLINK_SIZE_LIMIT_EXCEEDED';
    const WEBLINK_URL_INVALID = 'WEBLINK_URL_INVALID';
    const WRONG_CONTROLLER_TYPE = 'WRONG_CONTROLLER_TYPE';
    const XCLEAN_DJ_MATCH_IGNORABLE_ERROR = 'XCLEAN_DJ_MATCH_IGNORABLE_ERROR';
    const XCLEAN_DJ_MATCH_INTERNAL_DJ_ERROR = 'XCLEAN_DJ_MATCH_INTERNAL_DJ_ERROR';
    const XCLEAN_DJ_MATCH_NON_RETRIABLE_ERROR = 'XCLEAN_DJ_MATCH_NON_RETRIABLE_ERROR';
    const XCLEAN_DJ_MATCH_RETRIABLE_ERROR = 'XCLEAN_DJ_MATCH_RETRIABLE_ERROR';
    const XCLEAN_DJ_MATCH_UNKNOWN_ERROR = 'XCLEAN_DJ_MATCH_UNKNOWN_ERROR';
    const XCLEAN_UNEXPECTED_ERROR = 'XCLEAN_UNEXPECTED_ERROR';


}
