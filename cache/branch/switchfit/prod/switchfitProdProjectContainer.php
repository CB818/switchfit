<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class switchfitProdProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.coffee' => 'getAssetic_Filter_CoffeeService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter.jpegoptim' => 'getAssetic_Filter_JpegoptimService',
            'assetic.filter.less' => 'getAssetic_Filter_LessService',
            'assetic.filter.optipng' => 'getAssetic_Filter_OptipngService',
            'assetic.filter.uglifycss' => 'getAssetic_Filter_UglifycssService',
            'assetic.filter.uglifyjs2' => 'getAssetic_Filter_Uglifyjs2Service',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'bazinga.jstranslation.controller' => 'getBazinga_Jstranslation_ControllerService',
            'bazinga.jstranslation.translation_dumper' => 'getBazinga_Jstranslation_TranslationDumperService',
            'bazinga.jstranslation.translation_finder' => 'getBazinga_Jstranslation_TranslationFinderService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.emergency_logger_listener' => 'getDebug_EmergencyLoggerListenerService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.switchfit_connection' => 'getDoctrine_Dbal_SwitchfitConnectionService',
            'doctrine.orm.switchfit_entity_manager' => 'getDoctrine_Orm_SwitchfitEntityManagerService',
            'doctrine.orm.switchfit_manager_configurator' => 'getDoctrine_Orm_SwitchfitManagerConfiguratorService',
            'doctrine.orm.switchfit_metadata_cache' => 'getDoctrine_Orm_SwitchfitMetadataCacheService',
            'doctrine.orm.switchfit_query_cache' => 'getDoctrine_Orm_SwitchfitQueryCacheService',
            'doctrine.orm.switchfit_result_cache' => 'getDoctrine_Orm_SwitchfitResultCacheService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'elfinder_loader' => 'getElfinderLoaderService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.format_listener' => 'getFosRest_FormatListenerService',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService',
            'fos_rest.inflector.doctrine' => 'getFosRest_Inflector_DoctrineService',
            'fos_rest.mime_type_listener' => 'getFosRest_MimeTypeListenerService',
            'fos_rest.param_fetcher_listener' => 'getFosRest_ParamFetcherListenerService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.routing.loader.controller' => 'getFosRest_Routing_Loader_ControllerService',
            'fos_rest.routing.loader.processor' => 'getFosRest_Routing_Loader_ProcessorService',
            'fos_rest.routing.loader.reader.action' => 'getFosRest_Routing_Loader_Reader_ActionService',
            'fos_rest.routing.loader.reader.controller' => 'getFosRest_Routing_Loader_Reader_ControllerService',
            'fos_rest.routing.loader.xml_collection' => 'getFosRest_Routing_Loader_XmlCollectionService',
            'fos_rest.routing.loader.yaml_collection' => 'getFosRest_Routing_Loader_YamlCollectionService',
            'fos_rest.view.exception_wrapper_handler' => 'getFosRest_View_ExceptionWrapperHandlerService',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService',
            'fos_rest.view_response_listener' => 'getFosRest_ViewResponseListenerService',
            'fos_user.change_password.form' => 'getFosUser_ChangePassword_FormService',
            'fos_user.change_password.form.handler.default' => 'getFosUser_ChangePassword_Form_Handler_DefaultService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.entity_manager' => 'getFosUser_EntityManagerService',
            'fos_user.group.form' => 'getFosUser_Group_FormService',
            'fos_user.group.form.handler' => 'getFosUser_Group_Form_HandlerService',
            'fos_user.group.form.type' => 'getFosUser_Group_Form_TypeService',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form' => 'getFosUser_Profile_FormService',
            'fos_user.profile.form.handler' => 'getFosUser_Profile_Form_HandlerService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form' => 'getFosUser_Registration_FormService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form' => 'getFosUser_Resetting_FormService',
            'fos_user.resetting.form.handler' => 'getFosUser_Resetting_Form_HandlerService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_provider.username_email' => 'getFosUser_UserProvider_UsernameEmailService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'gaufrette.city_image_fs_filesystem' => 'getGaufrette_CityImageFsFilesystemService',
            'gaufrette.diary_picture_fs_filesystem' => 'getGaufrette_DiaryPictureFsFilesystemService',
            'gaufrette.meal_image_fs_filesystem' => 'getGaufrette_MealImageFsFilesystemService',
            'gaufrette.quest_image_fs_filesystem' => 'getGaufrette_QuestImageFsFilesystemService',
            'gaufrette.sf_life_header_fs_filesystem' => 'getGaufrette_SfLifeHeaderFsFilesystemService',
            'gaufrette.sf_life_video_preview_fs_filesystem' => 'getGaufrette_SfLifeVideoPreviewFsFilesystemService',
            'gaufrette.user_picture_fs_filesystem' => 'getGaufrette_UserPictureFsFilesystemService',
            'gaufrette.workout_image_fs_filesystem' => 'getGaufrette_WorkoutImageFsFilesystemService',
            'http_kernel' => 'getHttpKernelService',
            'hwi_oauth.http_client' => 'getHwiOauth_HttpClientService',
            'hwi_oauth.resource_owner.facebook' => 'getHwiOauth_ResourceOwner_FacebookService',
            'hwi_oauth.resource_ownermap.main' => 'getHwiOauth_ResourceOwnermap_MainService',
            'hwi_oauth.security.oauth_utils' => 'getHwiOauth_Security_OauthUtilsService',
            'hwi_oauth.templating.helper.oauth' => 'getHwiOauth_Templating_Helper_OauthService',
            'hwi_oauth.user_checker' => 'getHwiOauth_UserCheckerService',
            'ivory_ck_editor.config_manager' => 'getIvoryCkEditor_ConfigManagerService',
            'ivory_ck_editor.form.type' => 'getIvoryCkEditor_Form_TypeService',
            'ivory_ck_editor.plugin_manager' => 'getIvoryCkEditor_PluginManagerService',
            'ivory_ck_editor.styles_set_manager' => 'getIvoryCkEditor_StylesSetManagerService',
            'ivory_ck_editor.template_manager' => 'getIvoryCkEditor_TemplateManagerService',
            'ivory_ck_editor.templating.helper' => 'getIvoryCkEditor_Templating_HelperService',
            'ivory_ck_editor.twig_extension' => 'getIvoryCkEditor_TwigExtensionService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService',
            'jms_serializer.form_error_handler' => 'getJmsSerializer_FormErrorHandlerService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.metadata_factory' => 'getJmsSerializer_MetadataFactoryService',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'kernel' => 'getKernelService',
            'knp_gaufrette.filesystem_map' => 'getKnpGaufrette_FilesystemMapService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.emergency' => 'getMonolog_Logger_EmergencyService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.snc_redis' => 'getMonolog_Logger_SncRedisService',
            'nelmio_api_doc.doc_comment_extractor' => 'getNelmioApiDoc_DocCommentExtractorService',
            'nelmio_api_doc.extractor.api_doc_extractor' => 'getNelmioApiDoc_Extractor_ApiDocExtractorService',
            'nelmio_api_doc.form.extension.description_form_type_extension' => 'getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService',
            'nelmio_api_doc.formatter.abstract_formatter' => 'getNelmioApiDoc_Formatter_AbstractFormatterService',
            'nelmio_api_doc.formatter.html_formatter' => 'getNelmioApiDoc_Formatter_HtmlFormatterService',
            'nelmio_api_doc.formatter.markdown_formatter' => 'getNelmioApiDoc_Formatter_MarkdownFormatterService',
            'nelmio_api_doc.formatter.simple_formatter' => 'getNelmioApiDoc_Formatter_SimpleFormatterService',
            'nelmio_api_doc.parser.form_type_parser' => 'getNelmioApiDoc_Parser_FormTypeParserService',
            'nelmio_api_doc.parser.jms_metadata_parser' => 'getNelmioApiDoc_Parser_JmsMetadataParserService',
            'nelmio_api_doc.parser.validation_parser' => 'getNelmioApiDoc_Parser_ValidationParserService',
            'nelmio_api_doc.twig.extension.extra_markdown' => 'getNelmioApiDoc_Twig_Extension_ExtraMarkdownService',
            'nordcode_academy.academy_manager' => 'getNordcodeAcademy_AcademyManagerService',
            'nordcode_academy.admin.academy' => 'getNordcodeAcademy_Admin_AcademyService',
            'nordcode_academy.admin.academy_has_module' => 'getNordcodeAcademy_Admin_AcademyHasModuleService',
            'nordcode_academy.admin.answer' => 'getNordcodeAcademy_Admin_AnswerService',
            'nordcode_academy.admin.module' => 'getNordcodeAcademy_Admin_ModuleService',
            'nordcode_academy.admin.question' => 'getNordcodeAcademy_Admin_QuestionService',
            'nordcode_academy.admin.topic' => 'getNordcodeAcademy_Admin_TopicService',
            'nordcode_admin.admin_locale_listener' => 'getNordcodeAdmin_AdminLocaleListenerService',
            'nordcode_admin.form.sonata_json' => 'getNordcodeAdmin_Form_SonataJsonService',
            'nordcode_admin_page_board.block.loader' => 'getNordcodeAdminPageBoard_Block_LoaderService',
            'nordcode_admin_page_board.block.loader.chain' => 'getNordcodeAdminPageBoard_Block_Loader_ChainService',
            'nordcode_admin_page_board.manager' => 'getNordcodeAdminPageBoard_ManagerService',
            'nordcode_admin_page_board.routes_config' => 'getNordcodeAdminPageBoard_RoutesConfigService',
            'nordcode_admin_page_board.routes_loader' => 'getNordcodeAdminPageBoard_RoutesLoaderService',
            'nordcode_core.contact_message_manager' => 'getNordcodeCore_ContactMessageManagerService',
            'nordcode_core.course_manager' => 'getNordcodeCore_CourseManagerService',
            'nordcode_core.diary_manager' => 'getNordcodeCore_DiaryManagerService',
            'nordcode_core.inspire_manager' => 'getNordcodeCore_InspireManagerService',
            'nordcode_core.meal_manager' => 'getNordcodeCore_MealManagerService',
            'nordcode_core.questionnaire_manager' => 'getNordcodeCore_QuestionnaireManagerService',
            'nordcode_core.sf_life' => 'getNordcodeCore_SfLifeService',
            'nordcode_core.suggest_manager' => 'getNordcodeCore_SuggestManagerService',
            'nordcode_core.workout_manager' => 'getNordcodeCore_WorkoutManagerService',
            'nordcode_geo.admin.city' => 'getNordcodeGeo_Admin_CityService',
            'nordcode_geo.admin.country' => 'getNordcodeGeo_Admin_CountryService',
            'nordcode_geo.city_manager' => 'getNordcodeGeo_CityManagerService',
            'nordcode_helper.form_errors_handler' => 'getNordcodeHelper_FormErrorsHandlerService',
            'nordcode_logger.email_log_handler' => 'getNordcodeLogger_EmailLogHandlerService',
            'nordcode_logger.email_logger' => 'getNordcodeLogger_EmailLoggerService',
            'nordcode_notification.admin.notice' => 'getNordcodeNotification_Admin_NoticeService',
            'nordcode_notification.notice_manager' => 'getNordcodeNotification_NoticeManagerService',
            'nordcode_payment_skrill.form.skrill_type' => 'getNordcodePaymentSkrill_Form_SkrillTypeService',
            'nordcode_payment_skrill.gateway' => 'getNordcodePaymentSkrill_GatewayService',
            'nordcode_payment_skrill.log_handler' => 'getNordcodePaymentSkrill_LogHandlerService',
            'nordcode_payment_skrill.logger' => 'getNordcodePaymentSkrill_LoggerService',
            'nordcode_payment_skrill.plugin' => 'getNordcodePaymentSkrill_PluginService',
            'nordcode_payment_skrill.status_callback' => 'getNordcodePaymentSkrill_StatusCallbackService',
            'nordcode_point.activity_manager' => 'getNordcodePoint_ActivityManagerService',
            'nordcode_point.point_manager' => 'getNordcodePoint_PointManagerService',
            'nordcode_qa.admin.answer' => 'getNordcodeQa_Admin_AnswerService',
            'nordcode_qa.admin.category' => 'getNordcodeQa_Admin_CategoryService',
            'nordcode_qa.admin.question' => 'getNordcodeQa_Admin_QuestionService',
            'nordcode_qa.admin.vote' => 'getNordcodeQa_Admin_VoteService',
            'nordcode_qa.manager' => 'getNordcodeQa_ManagerService',
            'nordcode_quest.admin.quest' => 'getNordcodeQuest_Admin_QuestService',
            'nordcode_quest.admin.quest_category' => 'getNordcodeQuest_Admin_QuestCategoryService',
            'nordcode_quest.admin.quest_photo' => 'getNordcodeQuest_Admin_QuestPhotoService',
            'nordcode_quest.quest_manager' => 'getNordcodeQuest_QuestManagerService',
            'nordcode_rest.assoc_collection_handler' => 'getNordcodeRest_AssocCollectionHandlerService',
            'nordcode_rest.form_handler' => 'getNordcodeRest_FormHandlerService',
            'nordcode_rest.identical_property_naming_strategy' => 'getNordcodeRest_IdenticalPropertyNamingStrategyService',
            'nordcode_switchfit.access_denied_exception_listener' => 'getNordcodeSwitchfit_AccessDeniedExceptionListenerService',
            'nordcode_switchfit.admin.body_type' => 'getNordcodeSwitchfit_Admin_BodyTypeService',
            'nordcode_switchfit.admin.contact_message' => 'getNordcodeSwitchfit_Admin_ContactMessageService',
            'nordcode_switchfit.admin.content' => 'getNordcodeSwitchfit_Admin_ContentService',
            'nordcode_switchfit.admin.course' => 'getNordcodeSwitchfit_Admin_CourseService',
            'nordcode_switchfit.admin.course_price' => 'getNordcodeSwitchfit_Admin_CoursePriceService',
            'nordcode_switchfit.admin.course_promo_code' => 'getNordcodeSwitchfit_Admin_CoursePromoCodeService',
            'nordcode_switchfit.admin.diary' => 'getNordcodeSwitchfit_Admin_DiaryService',
            'nordcode_switchfit.admin.diary_entry' => 'getNordcodeSwitchfit_Admin_DiaryEntryService',
            'nordcode_switchfit.admin.diary_entry_comment' => 'getNordcodeSwitchfit_Admin_DiaryEntryCommentService',
            'nordcode_switchfit.admin.diary_entry_vote' => 'getNordcodeSwitchfit_Admin_DiaryEntryVoteService',
            'nordcode_switchfit.admin.meal' => 'getNordcodeSwitchfit_Admin_MealService',
            'nordcode_switchfit.admin.meal_category' => 'getNordcodeSwitchfit_Admin_MealCategoryService',
            'nordcode_switchfit.admin.meal_favorite' => 'getNordcodeSwitchfit_Admin_MealFavoriteService',
            'nordcode_switchfit.admin.meal_photo' => 'getNordcodeSwitchfit_Admin_MealPhotoService',
            'nordcode_switchfit.admin.meal_type' => 'getNordcodeSwitchfit_Admin_MealTypeService',
            'nordcode_switchfit.admin.payment' => 'getNordcodeSwitchfit_Admin_PaymentService',
            'nordcode_switchfit.admin.payment_instruction' => 'getNordcodeSwitchfit_Admin_PaymentInstructionService',
            'nordcode_switchfit.admin.product' => 'getNordcodeSwitchfit_Admin_ProductService',
            'nordcode_switchfit.admin.sf_life_header' => 'getNordcodeSwitchfit_Admin_SfLifeHeaderService',
            'nordcode_switchfit.admin.sf_life_video' => 'getNordcodeSwitchfit_Admin_SfLifeVideoService',
            'nordcode_switchfit.admin.suggest_day' => 'getNordcodeSwitchfit_Admin_SuggestDayService',
            'nordcode_switchfit.admin.suggest_day_item' => 'getNordcodeSwitchfit_Admin_SuggestDayItemService',
            'nordcode_switchfit.admin.suggest_template' => 'getNordcodeSwitchfit_Admin_SuggestTemplateService',
            'nordcode_switchfit.admin.suggest_template_has_day' => 'getNordcodeSwitchfit_Admin_SuggestTemplateHasDayService',
            'nordcode_switchfit.admin.timetable_item' => 'getNordcodeSwitchfit_Admin_TimetableItemService',
            'nordcode_switchfit.admin.transaction' => 'getNordcodeSwitchfit_Admin_TransactionService',
            'nordcode_switchfit.admin.user_course' => 'getNordcodeSwitchfit_Admin_UserCourseService',
            'nordcode_switchfit.admin.user_course_day' => 'getNordcodeSwitchfit_Admin_UserCourseDayService',
            'nordcode_switchfit.admin.user_course_warmup' => 'getNordcodeSwitchfit_Admin_UserCourseWarmupService',
            'nordcode_switchfit.admin.user_course_week' => 'getNordcodeSwitchfit_Admin_UserCourseWeekService',
            'nordcode_switchfit.admin.warmup_task' => 'getNordcodeSwitchfit_Admin_WarmupTaskService',
            'nordcode_switchfit.admin.workout' => 'getNordcodeSwitchfit_Admin_WorkoutService',
            'nordcode_switchfit.admin.workout_category' => 'getNordcodeSwitchfit_Admin_WorkoutCategoryService',
            'nordcode_switchfit.admin.workout_dayofcourse' => 'getNordcodeSwitchfit_Admin_WorkoutDayofcourseService',
            'nordcode_switchfit.admin.workout_favorite' => 'getNordcodeSwitchfit_Admin_WorkoutFavoriteService',
            'nordcode_switchfit.admin.workout_location' => 'getNordcodeSwitchfit_Admin_WorkoutLocationService',
            'nordcode_switchfit.admin.workout_photo' => 'getNordcodeSwitchfit_Admin_WorkoutPhotoService',
            'nordcode_switchfit.admin.workout_type' => 'getNordcodeSwitchfit_Admin_WorkoutTypeService',
            'nordcode_tipps.admin.tipp' => 'getNordcodeTipps_Admin_TippService',
            'nordcode_tipps.tipps_manager' => 'getNordcodeTipps_TippsManagerService',
            'nordcode_translation.form.translatable_field' => 'getNordcodeTranslation_Form_TranslatableFieldService',
            'nordcode_translation.listener.translatable' => 'getNordcodeTranslation_Listener_TranslatableService',
            'nordcode_uploader.city.adapter.filesystem.local' => 'getNordcodeUploader_City_Adapter_Filesystem_LocalService',
            'nordcode_uploader.diary.adapter.filesystem.local' => 'getNordcodeUploader_Diary_Adapter_Filesystem_LocalService',
            'nordcode_uploader.form.sonata_uploader_file' => 'getNordcodeUploader_Form_SonataUploaderFileService',
            'nordcode_uploader.form.uploader_file' => 'getNordcodeUploader_Form_UploaderFileService',
            'nordcode_uploader.listener.serialization_listener' => 'getNordcodeUploader_Listener_SerializationListenerService',
            'nordcode_uploader.meal.adapter.filesystem.local' => 'getNordcodeUploader_Meal_Adapter_Filesystem_LocalService',
            'nordcode_uploader.namer_uniqid' => 'getNordcodeUploader_NamerUniqidService',
            'nordcode_uploader.quest.adapter.filesystem.local' => 'getNordcodeUploader_Quest_Adapter_Filesystem_LocalService',
            'nordcode_uploader.sf_life.adapter.filesystem.local' => 'getNordcodeUploader_SfLife_Adapter_Filesystem_LocalService',
            'nordcode_uploader.storage.gaufrette' => 'getNordcodeUploader_Storage_GaufretteService',
            'nordcode_uploader.templating.helper.uploader_helper' => 'getNordcodeUploader_Templating_Helper_UploaderHelperService',
            'nordcode_uploader.user.adapter.filesystem.local' => 'getNordcodeUploader_User_Adapter_Filesystem_LocalService',
            'nordcode_uploader.workout.adapter.filesystem.local' => 'getNordcodeUploader_Workout_Adapter_Filesystem_LocalService',
            'nordcode_user.admin.block.diary_entries' => 'getNordcodeUser_Admin_Block_DiaryEntriesService',
            'nordcode_user.admin.block.meal_favorite' => 'getNordcodeUser_Admin_Block_MealFavoriteService',
            'nordcode_user.admin.block.user_academy' => 'getNordcodeUser_Admin_Block_UserAcademyService',
            'nordcode_user.admin.block.user_course' => 'getNordcodeUser_Admin_Block_UserCourseService',
            'nordcode_user.admin.block.user_course_health' => 'getNordcodeUser_Admin_Block_UserCourseHealthService',
            'nordcode_user.admin.block.user_course_weekly' => 'getNordcodeUser_Admin_Block_UserCourseWeeklyService',
            'nordcode_user.admin.block.user_main_data' => 'getNordcodeUser_Admin_Block_UserMainDataService',
            'nordcode_user.admin.block.workout_favorite' => 'getNordcodeUser_Admin_Block_WorkoutFavoriteService',
            'nordcode_user.mailer_real' => 'getNordcodeUser_MailerRealService',
            'nordcode_user.mailer_real_instance' => 'getNordcodeUser_MailerRealInstanceService',
            'nordcode_user.mailer_spool' => 'getNordcodeUser_MailerSpoolService',
            'nordcode_user.oauth_fos_user_provider' => 'getNordcodeUser_OauthFosUserProviderService',
            'nordcode_user.registration_form_handler' => 'getNordcodeUser_RegistrationFormHandlerService',
            'nordcode_user.registration_form_type' => 'getNordcodeUser_RegistrationFormTypeService',
            'nordcode_user.registration_sign_b_form_handler' => 'getNordcodeUser_RegistrationSignBFormHandlerService',
            'nordcode_user.registration_sign_b_form_type' => 'getNordcodeUser_RegistrationSignBFormTypeService',
            'nordcode_user.security.authentication_handler' => 'getNordcodeUser_Security_AuthenticationHandlerService',
            'nordcode_user.security.logout_handler' => 'getNordcodeUser_Security_LogoutHandlerService',
            'nordcode_user.user_manager' => 'getNordcodeUser_UserManagerService',
            'payment.encryption_service' => 'getPayment_EncryptionServiceService',
            'payment.form.choose_payment_method_type' => 'getPayment_Form_ChoosePaymentMethodTypeService',
            'payment.plugin_controller' => 'getPayment_PluginControllerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'rs_queue.consumer' => 'getRsQueue_ConsumerService',
            'rs_queue.data_collector' => 'getRsQueue_DataCollectorService',
            'rs_queue.producer' => 'getRsQueue_ProducerService',
            'rs_queue.publisher' => 'getRsQueue_PublisherService',
            'rs_queue.redis' => 'getRsQueue_RedisService',
            'rs_queue.redis.factory' => 'getRsQueue_Redis_FactoryService',
            'rs_queue.resolver.queuealias' => 'getRsQueue_Resolver_QueuealiasService',
            'rs_queue.serializer' => 'getRsQueue_SerializerService',
            'rs_queue.serializer.factory' => 'getRsQueue_Serializer_FactoryService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.context' => 'getSecurity_ContextService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.admin' => 'getSecurity_Firewall_Map_Context_AdminService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout.handler.session' => 'getSecurity_Logout_Handler_SessionService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'snc_redis.logger' => 'getSncRedis_LoggerService',
            'snc_redis.phpredis.cache' => 'getSncRedis_Phpredis_CacheService',
            'snc_redis.phpredis.mailer_spool' => 'getSncRedis_Phpredis_MailerSpoolService',
            'snc_redis.phpredis.session' => 'getSncRedis_Phpredis_SessionService',
            'snc_redis.session.handler' => 'getSncRedis_Session_HandlerService',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService',
            'sonata.admin.builder.orm_datagrid' => 'getSonata_Admin_Builder_OrmDatagridService',
            'sonata.admin.builder.orm_form' => 'getSonata_Admin_Builder_OrmFormService',
            'sonata.admin.builder.orm_list' => 'getSonata_Admin_Builder_OrmListService',
            'sonata.admin.builder.orm_show' => 'getSonata_Admin_Builder_OrmShowService',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService',
            'sonata.admin.form.type.model_hidden' => 'getSonata_Admin_Form_Type_ModelHiddenService',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService',
            'sonata.admin.guesser.orm_datagrid' => 'getSonata_Admin_Guesser_OrmDatagridService',
            'sonata.admin.guesser.orm_datagrid_chain' => 'getSonata_Admin_Guesser_OrmDatagridChainService',
            'sonata.admin.guesser.orm_list' => 'getSonata_Admin_Guesser_OrmListService',
            'sonata.admin.guesser.orm_list_chain' => 'getSonata_Admin_Guesser_OrmListChainService',
            'sonata.admin.guesser.orm_show' => 'getSonata_Admin_Guesser_OrmShowService',
            'sonata.admin.guesser.orm_show_chain' => 'getSonata_Admin_Guesser_OrmShowChainService',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService',
            'sonata.admin.orm.filter.type.insensitive_string' => 'getSonata_Admin_Orm_Filter_Type_InsensitiveStringService',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService',
            'sonata.admin.security.handler' => 'getSonata_Admin_Security_HandlerService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.cache.handler.noop' => 'getSonata_Block_Cache_Handler_NoopService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.form.type.block' => 'getSonata_Block_Form_Type_BlockService',
            'sonata.block.form.type.container_template' => 'getSonata_Block_Form_Type_ContainerTemplateService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.service.container' => 'getSonata_Block_Service_ContainerService',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService',
            'sonata.block.service.menu' => 'getSonata_Block_Service_MenuService',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService',
            'sonata.block.service.template' => 'getSonata_Block_Service_TemplateService',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'sonata.core.date.moment_format_converter' => 'getSonata_Core_Date_MomentFormatConverterService',
            'sonata.core.flashmessage.manager' => 'getSonata_Core_Flashmessage_ManagerService',
            'sonata.core.flashmessage.twig.extension' => 'getSonata_Core_Flashmessage_Twig_ExtensionService',
            'sonata.core.form.type.array' => 'getSonata_Core_Form_Type_ArrayService',
            'sonata.core.form.type.boolean' => 'getSonata_Core_Form_Type_BooleanService',
            'sonata.core.form.type.collection' => 'getSonata_Core_Form_Type_CollectionService',
            'sonata.core.form.type.date_picker' => 'getSonata_Core_Form_Type_DatePickerService',
            'sonata.core.form.type.date_range' => 'getSonata_Core_Form_Type_DateRangeService',
            'sonata.core.form.type.datetime_picker' => 'getSonata_Core_Form_Type_DatetimePickerService',
            'sonata.core.form.type.datetime_range' => 'getSonata_Core_Form_Type_DatetimeRangeService',
            'sonata.core.form.type.equal' => 'getSonata_Core_Form_Type_EqualService',
            'sonata.core.form.type.translatable_choice' => 'getSonata_Core_Form_Type_TranslatableChoiceService',
            'sonata.core.model.adapter.chain' => 'getSonata_Core_Model_Adapter_ChainService',
            'sonata.core.twig.extension.text' => 'getSonata_Core_Twig_Extension_TextService',
            'sonata.core.twig.status_extension' => 'getSonata_Core_Twig_StatusExtensionService',
            'sonata.core.twig.template_extension' => 'getSonata_Core_Twig_TemplateExtensionService',
            'sonata.user.admin.group' => 'getSonata_User_Admin_GroupService',
            'sonata.user.admin.user' => 'getSonata_User_Admin_UserService',
            'sonata.user.api.form.type.group' => 'getSonata_User_Api_Form_Type_GroupService',
            'sonata.user.api.form.type.user' => 'getSonata_User_Api_Form_Type_UserService',
            'sonata.user.block.account' => 'getSonata_User_Block_AccountService',
            'sonata.user.block.menu' => 'getSonata_User_Block_MenuService',
            'sonata.user.controller.api.group' => 'getSonata_User_Controller_Api_GroupService',
            'sonata.user.controller.api.user' => 'getSonata_User_Controller_Api_UserService',
            'sonata.user.editable_role_builder' => 'getSonata_User_EditableRoleBuilderService',
            'sonata.user.form.gender_list' => 'getSonata_User_Form_GenderListService',
            'sonata.user.form.type.security_roles' => 'getSonata_User_Form_Type_SecurityRolesService',
            'sonata.user.group_manager' => 'getSonata_User_GroupManagerService',
            'sonata.user.manager.user' => 'getSonata_User_Manager_UserService',
            'sonata.user.profile.form' => 'getSonata_User_Profile_FormService',
            'sonata.user.profile.form.handler' => 'getSonata_User_Profile_Form_HandlerService',
            'sonata.user.profile.form.type' => 'getSonata_User_Profile_Form_TypeService',
            'sonata.user.profile.menu_builder' => 'getSonata_User_Profile_MenuBuilderService',
            'sonata.user.registration.form' => 'getSonata_User_Registration_FormService',
            'sonata.user.registration.form.handler' => 'getSonata_User_Registration_Form_HandlerService',
            'sonata.user.registration.form.type' => 'getSonata_User_Registration_Form_TypeService',
            'sonata.user.serializer.handler.user' => 'getSonata_User_Serializer_Handler_UserService',
            'sonata.user.twig.global' => 'getSonata_User_Twig_GlobalService',
            'sonata.user.user_manager' => 'getSonata_User_UserManagerService',
            'stof_doctrine_extensions.event_listener.locale' => 'getStofDoctrineExtensions_EventListener_LocaleService',
            'stof_doctrine_extensions.listener.translatable' => 'getStofDoctrineExtensions_Listener_TranslatableService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.spool.service' => 'getSwiftmailer_Mailer_Default_Spool_ServiceService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'swiftmailer.plugin.impersonate' => 'getSwiftmailer_Plugin_ImpersonateService',
            'swiftmailer.plugin.redirecting' => 'getSwiftmailer_Plugin_RedirectingService',
            'templating' => 'getTemplatingService',
            'templating.asset.package.bootstrap_cdn.http' => 'getTemplating_Asset_Package_BootstrapCdn_HttpService',
            'templating.asset.package.bootstrap_cdn.ssl' => 'getTemplating_Asset_Package_BootstrapCdn_SslService',
            'templating.asset.package.cloudflare_cdn.http' => 'getTemplating_Asset_Package_CloudflareCdn_HttpService',
            'templating.asset.package.cloudflare_cdn.ssl' => 'getTemplating_Asset_Package_CloudflareCdn_SslService',
            'templating.asset.package.jquery_cdn.http' => 'getTemplating_Asset_Package_JqueryCdn_HttpService',
            'templating.asset.package.jquery_cdn.ssl' => 'getTemplating_Asset_Package_JqueryCdn_SslService',
            'templating.asset.package_factory' => 'getTemplating_Asset_PackageFactoryService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.fm_tinymce_init' => 'getTwig_Extension_FmTinymceInitService',
            'twig.extension.intl' => 'getTwig_Extension_IntlService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.mapping.class_metadata_factory' => 'getValidator_Mapping_ClassMetadataFactoryService',
            'validator.validator_factory' => 'getValidator_ValidatorFactoryService',
            'vich_uploader.adapter' => 'getVichUploader_AdapterService',
            'vich_uploader.file_injector' => 'getVichUploader_FileInjectorService',
            'vich_uploader.listener.uploader.propel' => 'getVichUploader_Listener_Uploader_PropelService',
            'vich_uploader.metadata_reader' => 'getVichUploader_MetadataReaderService',
            'vich_uploader.namer_origname' => 'getVichUploader_NamerOrignameService',
            'vich_uploader.namer_uniqid' => 'getVichUploader_NamerUniqidService',
            'vich_uploader.property_mapping_factory' => 'getVichUploader_PropertyMappingFactoryService',
            'vich_uploader.storage' => 'getVichUploader_StorageService',
            'vich_uploader.storage.file_system' => 'getVichUploader_Storage_FileSystemService',
            'vich_uploader.storage.gaufrette' => 'getVichUploader_Storage_GaufretteService',
            'vich_uploader.storage_factory' => 'getVichUploader_StorageFactoryService',
            'vich_uploader.templating.helper.uploader_helper' => 'getVichUploader_Templating_Helper_UploaderHelperService',
            'vich_uploader.upload_handler' => 'getVichUploader_UploadHandlerService',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.switchfit_connection',
            'doctrine.orm.default_entity_manager' => 'doctrine.orm.switchfit_entity_manager',
            'doctrine.orm.entity_manager' => 'doctrine.orm.switchfit_entity_manager',
            'fos_rest.inflector' => 'fos_rest.inflector.doctrine',
            'fos_rest.router' => 'router',
            'fos_rest.serializer' => 'jms_serializer',
            'fos_rest.templating' => 'templating',
            'fos_user.change_password.form.handler' => 'fos_user.change_password.form.handler.default',
            'fos_user.registration.form.handler' => 'nordcode_user.registration_sign_b_form_handler',
            'fos_user.user_manager' => 'nordcode_user.user_manager',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'gaufrette.city_image_adapter_adapter' => 'nordcode_uploader.city.adapter.filesystem.local',
            'gaufrette.diary_picture_adapter_adapter' => 'nordcode_uploader.diary.adapter.filesystem.local',
            'gaufrette.meal_image_adapter_adapter' => 'nordcode_uploader.meal.adapter.filesystem.local',
            'gaufrette.quest_image_adapter_adapter' => 'nordcode_uploader.quest.adapter.filesystem.local',
            'gaufrette.sf_life_adapter_adapter' => 'nordcode_uploader.sf_life.adapter.filesystem.local',
            'gaufrette.user_picture_adapter_adapter' => 'nordcode_uploader.user.adapter.filesystem.local',
            'gaufrette.workout_image_adapter_adapter' => 'nordcode_uploader.workout.adapter.filesystem.local',
            'hwi_oauth.user.provider.entity.main' => 'nordcode_user.oauth_fos_user_provider',
            'jms_serializer.naming_strategy' => 'nordcode_rest.identical_property_naming_strategy',
            'mailer' => 'swiftmailer.mailer.default',
            'serializer' => 'jms_serializer',
            'session.handler' => 'snc_redis.session.handler',
            'session.storage' => 'session.storage.native',
            'snc_redis.cache' => 'snc_redis.phpredis.cache',
            'snc_redis.cache_client' => 'snc_redis.phpredis.cache',
            'snc_redis.mailer_spool' => 'snc_redis.phpredis.mailer_spool',
            'snc_redis.mailer_spool_client' => 'snc_redis.phpredis.mailer_spool',
            'snc_redis.session' => 'snc_redis.phpredis.session',
            'snc_redis.session.client' => 'snc_redis.phpredis.session',
            'snc_redis.session_client' => 'snc_redis.phpredis.session',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.loader.chain' => 'nordcode_admin_page_board.block.loader.chain',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'sonata.user.authentication.form' => 'fos_user.profile.form',
            'sonata.user.authentication.form_handler' => 'fos_user.profile.form.handler',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.mailer.default.spool' => 'swiftmailer.mailer.default.spool.service',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool.service',
            'swiftmailer.spool.redis' => 'swiftmailer.mailer.default.spool.service',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'translator' => 'translator.default',
        );
    }
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), (__DIR__.'/annotations'), false);
    }
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');
        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), false)));
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/FrameworkBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/SecurityBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/TwigBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/MonologBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[4].'/repo/branch/vendor/symfony/monolog-bundle/Symfony/Bundle/MonologBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/AsseticBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[4].'/repo/branch/vendor/symfony/assetic-bundle/Symfony/Bundle/AsseticBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/SwiftmailerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[4].'/repo/branch/vendor/symfony/swiftmailer-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSerializerBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/JMSSerializerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSerializerBundle', ($this->targetDirs[4].'/repo/branch/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/DoctrineBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[4].'/repo/branch/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StofDoctrineExtensionsBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/StofDoctrineExtensionsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StofDoctrineExtensionsBundle', ($this->targetDirs[4].'/repo/branch/vendor/stof/doctrine-extensions-bundle/Stof/DoctrineExtensionsBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/KnpMenuBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', ($this->targetDirs[4].'/repo/branch/vendor/knplabs/knp-menu-bundle/Knp/Bundle/MenuBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SncRedisBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/SncRedisBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SncRedisBundle', ($this->targetDirs[4].'/repo/branch/vendor/snc/redis-bundle/Snc/RedisBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/FOSUserBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataUserBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/SonataUserBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataUserBundle', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeUserBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeUserBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeUserBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/UserBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSPaymentCoreBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/JMSPaymentCoreBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSPaymentCoreBundle', ($this->targetDirs[4].'/repo/branch/vendor/jms/payment-core-bundle/JMS/Payment/CoreBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeHelperBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeHelperBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeHelperBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/HelperBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeCoreBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeCoreBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeCoreBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/CoreBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeGeoBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeGeoBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeGeoBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/GeoBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodePaymentSkrillBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodePaymentSkrillBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodePaymentSkrillBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/PaymentSkrillBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeTranslationBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeTranslationBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeTranslationBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/TranslationBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeLoggerBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeLoggerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeLoggerBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/LoggerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineMigrationsBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/DoctrineMigrationsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineMigrationsBundle', ($this->targetDirs[4].'/repo/branch/vendor/doctrine/doctrine-migrations-bundle/Doctrine/Bundle/MigrationsBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSRestBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/FOSRestBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSRestBundle', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/rest-bundle/FOS/RestBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NelmioApiDocBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NelmioApiDocBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NelmioApiDocBundle', ($this->targetDirs[4].'/repo/branch/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonatajQueryBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/SonatajQueryBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonatajQueryBundle', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/jquery-bundle/Sonata/jQueryBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataCoreBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/SonataCoreBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataCoreBundle', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataAdminBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/SonataAdminBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataAdminBundle', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataDoctrineORMAdminBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/SonataDoctrineORMAdminBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataDoctrineORMAdminBundle', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataBlockBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/SonataBlockBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SonataBlockBundle', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/block-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpGaufretteBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/KnpGaufretteBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpGaufretteBundle', ($this->targetDirs[4].'/repo/branch/vendor/knplabs/knp-gaufrette-bundle/Knp/Bundle/GaufretteBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VichUploaderBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/VichUploaderBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'VichUploaderBundle', ($this->targetDirs[4].'/repo/branch/vendor/vich/uploader-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'RSQueueBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/RSQueueBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'RSQueueBundle', ($this->targetDirs[4].'/repo/branch/vendor/mmoreram/rsqueue-bundle/Mmoreram/RSQueueBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BazingaJsTranslationBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/BazingaJsTranslationBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'BazingaJsTranslationBundle', ($this->targetDirs[4].'/repo/branch/vendor/willdurand/js-translation-bundle/Bazinga/Bundle/JsTranslationBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IvoryCKEditorBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/IvoryCKEditorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IvoryCKEditorBundle', ($this->targetDirs[4].'/repo/branch/vendor/egeloen/ckeditor-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FMElfinderBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/FMElfinderBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FMElfinderBundle', ($this->targetDirs[4].'/repo/branch/vendor/helios-ag/fm-elfinder-bundle/FM/ElfinderBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeAdminBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeAdminBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeAdminBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/AdminBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeRestBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeRestBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeRestBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/RestBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeSwitchfitBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeSwitchfitBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeSwitchfitBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/SwitchfitBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeApiDocBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeApiDocBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeApiDocBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/ApiDocBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeUploaderBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeUploaderBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeUploaderBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/UploaderBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeAcademyBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeAcademyBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeAcademyBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/AcademyBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeNotificationBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeNotificationBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeNotificationBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/NotificationBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeQABundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeQABundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeQABundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/QABundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeAdminPageBoardBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeAdminPageBoardBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeAdminPageBoardBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/AdminPageBoardBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeQuestBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeQuestBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeQuestBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/QuestBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodePointBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodePointBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodePointBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/PointBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeSignupBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeSignupBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeSignupBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/SignupBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'HWIOAuthBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/HWIOAuthBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'HWIOAuthBundle', ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeTippsBundle', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/NordcodeTippsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'NordcodeTippsBundle', ($this->targetDirs[4].'/repo/branch/src/Nordcode/TippsBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');
        return $instance;
    }
    protected function getAssetic_Filter_CoffeeService()
    {
        $this->services['assetic.filter.coffee'] = $instance = new \Assetic\Filter\CoffeeScriptFilter('/usr/bin/coffee', '/usr/bin/node');
        $instance->setTimeout(NULL);
        $instance->setNodePaths(array(0 => '/usr/lib/node_modules'));
        $instance->setBare(NULL);
        return $instance;
    }
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }
    protected function getAssetic_Filter_JpegoptimService()
    {
        $this->services['assetic.filter.jpegoptim'] = $instance = new \Assetic\Filter\JpegoptimFilter(($this->targetDirs[4].'/repo/branch/app/switchfit/bin/image_optim/jpegoptim'));
        $instance->setTimeout(NULL);
        $instance->setStripAll(false);
        $instance->setMax(NULL);
        return $instance;
    }
    protected function getAssetic_Filter_LessService()
    {
        $this->services['assetic.filter.less'] = $instance = new \Assetic\Filter\LessFilter('/usr/bin/node', array(0 => '/usr/lib/node_modules'));
        $instance->setTimeout(NULL);
        $instance->setCompress(NULL);
        return $instance;
    }
    protected function getAssetic_Filter_OptipngService()
    {
        $this->services['assetic.filter.optipng'] = $instance = new \Assetic\Filter\OptiPngFilter(($this->targetDirs[4].'/repo/branch/app/switchfit/bin/image_optim/optipng'));
        $instance->setTimeout(NULL);
        $instance->setLevel(NULL);
        return $instance;
    }
    protected function getAssetic_Filter_UglifycssService()
    {
        $this->services['assetic.filter.uglifycss'] = $instance = new \Assetic\Filter\UglifyCssFilter('/usr/bin/uglifycss', '/usr/bin/node');
        $instance->setTimeout(NULL);
        $instance->setNodePaths(array(0 => '/usr/lib/node_modules'));
        $instance->setExpandVars(false);
        $instance->setUglyComments(false);
        $instance->setCuteComments(false);
        return $instance;
    }
    protected function getAssetic_Filter_Uglifyjs2Service()
    {
        $this->services['assetic.filter.uglifyjs2'] = $instance = new \Assetic\Filter\UglifyJs2Filter('/usr/bin/uglifyjs', '/usr/bin/node');
        $instance->setTimeout(NULL);
        $instance->setNodePaths(array(0 => '/usr/lib/node_modules'));
        $instance->setCompress(false);
        $instance->setBeautify(false);
        $instance->setMangle(false);
        return $instance;
    }
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite', 'jpegoptim' => 'assetic.filter.jpegoptim', 'optipng' => 'assetic.filter.optipng', 'uglifyjs2' => 'assetic.filter.uglifyjs2', 'uglifycss' => 'assetic.filter.uglifycss', 'coffee' => 'assetic.filter.coffee', 'less' => 'assetic.filter.less'));
    }
    protected function getBazinga_Jstranslation_ControllerService()
    {
        $a = $this->get('translation.loader.xliff');
        $this->services['bazinga.jstranslation.controller'] = $instance = new \Bazinga\Bundle\JsTranslationBundle\Controller\Controller($this->get('translator.default'), $this->get('templating'), $this->get('bazinga.jstranslation.translation_finder'), (__DIR__.'/bazinga-js-translation'), false, 'en', 'messages');
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        return $instance;
    }
    protected function getBazinga_Jstranslation_TranslationDumperService()
    {
        $a = $this->get('translation.loader.xliff');
        $this->services['bazinga.jstranslation.translation_dumper'] = $instance = new \Bazinga\Bundle\JsTranslationBundle\Dumper\TranslationDumper($this->get('templating'), $this->get('bazinga.jstranslation.translation_finder'), $this->get('router'), $this->get('filesystem'), 'en', 'messages');
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        return $instance;
    }
    protected function getBazinga_Jstranslation_TranslationFinderService()
    {
        return $this->services['bazinga.jstranslation.translation_finder'] = new \Bazinga\Bundle\JsTranslationBundle\Finder\TranslationFinder($this->get('kernel'));
    }
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');
        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources'));
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }
    protected function getDebug_EmergencyLoggerListenerService()
    {
        return $this->services['debug.emergency_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('emergency', $this->get('monolog.logger.emergency', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('switchfit' => 'doctrine.dbal.switchfit_connection'), array('switchfit' => 'doctrine.orm.switchfit_entity_manager'), 'switchfit', 'switchfit');
    }
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array('json' => array('class' => 'Sonata\\Doctrine\\Types\\JsonType', 'commented' => true)));
    }
    protected function getDoctrine_Dbal_SwitchfitConnectionService()
    {
        $a = $this->get('annotation_reader');
        $b = new \Gedmo\Sortable\SortableListener();
        $b->setAnnotationReader($a);
        $c = new \Gedmo\Sluggable\SluggableListener();
        $c->setAnnotationReader($a);
        $d = new \Gedmo\Timestampable\TimestampableListener();
        $d->setAnnotationReader($a);
        $e = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $e->addEventSubscriber($b);
        $e->addEventSubscriber($c);
        $e->addEventSubscriber(new \Vich\UploaderBundle\EventListener\DoctrineUploaderListener($this->get('vich_uploader.adapter'), $this->get('vich_uploader.metadata_reader'), $this->get('vich_uploader.upload_handler')));
        $e->addEventSubscriber($d);
        $e->addEventSubscriber($this->get('nordcode_translation.listener.translatable'));
        $e->addEventSubscriber($this->get('stof_doctrine_extensions.listener.translatable'));
        return $this->services['doctrine.dbal.switchfit_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_pgsql', 'dbname' => 'switchfit', 'user' => 'switchfit', 'host' => '127.0.0.1', 'port' => 5432, 'password' => 'switchfit', 'charset' => 'UTF', 'driverOptions' => array()), new \Doctrine\DBAL\Configuration(), $e, array());
    }
    protected function getDoctrine_Orm_SwitchfitEntityManagerService()
    {
        $a = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array(($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/doctrine') => 'FOS\\UserBundle\\Entity', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/config/doctrine') => 'Sonata\\UserBundle\\Entity', ($this->targetDirs[4].'/repo/branch/src/Nordcode/UserBundle/Resources/config/doctrine') => 'Nordcode\\UserBundle\\Entity', ($this->targetDirs[4].'/repo/branch/src/Nordcode/CoreBundle/Resources/config/doctrine') => 'Nordcode\\CoreBundle\\Entity', ($this->targetDirs[4].'/repo/branch/src/Nordcode/GeoBundle/Resources/config/doctrine') => 'Nordcode\\GeoBundle\\Entity', ($this->targetDirs[4].'/repo/branch/vendor/jms/payment-core-bundle/JMS/Payment/CoreBundle/Resources/config/doctrine') => 'JMS\\Payment\\CoreBundle\\Entity', ($this->targetDirs[4].'/repo/branch/src/Nordcode/TranslationBundle/Resources/config/doctrine') => 'Nordcode\\TranslationBundle\\Entity', ($this->targetDirs[4].'/repo/branch/src/Nordcode/AcademyBundle/Resources/config/doctrine') => 'Nordcode\\AcademyBundle\\Entity', ($this->targetDirs[4].'/repo/branch/src/Nordcode/NotificationBundle/Resources/config/doctrine') => 'Nordcode\\NotificationBundle\\Entity', ($this->targetDirs[4].'/repo/branch/src/Nordcode/QABundle/Resources/config/doctrine') => 'Nordcode\\QABundle\\Entity', ($this->targetDirs[4].'/repo/branch/src/Nordcode/QuestBundle/Resources/config/doctrine') => 'Nordcode\\QuestBundle\\Entity', ($this->targetDirs[4].'/repo/branch/src/Nordcode/PointBundle/Resources/config/doctrine') => 'Nordcode\\PointBundle\\Entity', ($this->targetDirs[4].'/repo/branch/src/Nordcode/TippsBundle/Resources/config/doctrine') => 'Nordcode\\TippsBundle\\Entity'));
        $a->setGlobalBasename('mapping');
        $b = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $b->addDriver($a, 'FOS\\UserBundle\\Entity');
        $b->addDriver($a, 'Sonata\\UserBundle\\Entity');
        $b->addDriver($a, 'Nordcode\\UserBundle\\Entity');
        $b->addDriver($a, 'Nordcode\\CoreBundle\\Entity');
        $b->addDriver($a, 'Nordcode\\GeoBundle\\Entity');
        $b->addDriver($a, 'JMS\\Payment\\CoreBundle\\Entity');
        $b->addDriver($a, 'Nordcode\\TranslationBundle\\Entity');
        $b->addDriver($a, 'Nordcode\\AcademyBundle\\Entity');
        $b->addDriver($a, 'Nordcode\\NotificationBundle\\Entity');
        $b->addDriver($a, 'Nordcode\\QABundle\\Entity');
        $b->addDriver($a, 'Nordcode\\QuestBundle\\Entity');
        $b->addDriver($a, 'Nordcode\\PointBundle\\Entity');
        $b->addDriver($a, 'Nordcode\\TippsBundle\\Entity');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array(0 => ($this->targetDirs[4].'/repo/branch/vendor/gedmo/doctrine-extensions/lib/Gedmo/Translatable/Entity'))), 'Gedmo\\Translatable\\Entity');
        $c = new \Doctrine\ORM\Configuration();
        $c->setEntityNamespaces(array('FOSUserBundle' => 'FOS\\UserBundle\\Entity', 'SonataUserBundle' => 'Sonata\\UserBundle\\Entity', 'NordcodeUserBundle' => 'Nordcode\\UserBundle\\Entity', 'NordcodeCoreBundle' => 'Nordcode\\CoreBundle\\Entity', 'NordcodeGeoBundle' => 'Nordcode\\GeoBundle\\Entity', 'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\Entity', 'NordcodeTranslationBundle' => 'Nordcode\\TranslationBundle\\Entity', 'Gedmo' => 'Gedmo\\Translatable\\Entity', 'NordcodeAcademyBundle' => 'Nordcode\\AcademyBundle\\Entity', 'NordcodeNotificationBundle' => 'Nordcode\\NotificationBundle\\Entity', 'NordcodeQABundle' => 'Nordcode\\QABundle\\Entity', 'NordcodeQuestBundle' => 'Nordcode\\QuestBundle\\Entity', 'NordcodePointBundle' => 'Nordcode\\PointBundle\\Entity', 'NordcodeTippsBundle' => 'Nordcode\\TippsBundle\\Entity'));
        $c->setMetadataCacheImpl($this->get('doctrine.orm.switchfit_metadata_cache'));
        $c->setQueryCacheImpl($this->get('doctrine.orm.switchfit_query_cache'));
        $c->setResultCacheImpl($this->get('doctrine.orm.switchfit_result_cache'));
        $c->setMetadataDriverImpl($b);
        $c->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $c->setProxyNamespace('Proxies');
        $c->setAutoGenerateProxyClasses(false);
        $c->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $c->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $c->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $this->services['doctrine.orm.switchfit_entity_manager'] = $instance = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.switchfit_connection'), $c);
        $this->get('doctrine.orm.switchfit_manager_configurator')->configure($instance);
        return $instance;
    }
    protected function getDoctrine_Orm_SwitchfitManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.switchfit_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }
    protected function getDoctrine_Orm_SwitchfitMetadataCacheService()
    {
        $this->services['doctrine.orm.switchfit_metadata_cache'] = $instance = new \Snc\RedisBundle\Doctrine\Cache\RedisCache();
        $instance->setRedis($this->get('snc_redis.phpredis.cache'));
        return $instance;
    }
    protected function getDoctrine_Orm_SwitchfitQueryCacheService()
    {
        $this->services['doctrine.orm.switchfit_query_cache'] = $instance = new \Snc\RedisBundle\Doctrine\Cache\RedisCache();
        $instance->setRedis($this->get('snc_redis.phpredis.cache'));
        return $instance;
    }
    protected function getDoctrine_Orm_SwitchfitResultCacheService()
    {
        $this->services['doctrine.orm.switchfit_result_cache'] = $instance = new \Snc\RedisBundle\Doctrine\Cache\RedisCache();
        $instance->setRedis($this->get('snc_redis.phpredis.cache'));
        return $instance;
    }
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }
    protected function getElfinderLoaderService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('elfinder_loader', 'request');
        }
        return $this->services['elfinder_loader'] = $this->scopedServices['request']['elfinder_loader'] = new \FM\ElfinderBundle\Loader\FMElfinderLoader(array('editor' => 'ckeditor', 'include_assets' => true, 'compression' => false, 'fullscreen' => true, 'connector' => array('roots' => array('uploads' => array('driver' => 'LocalFileSystem', 'path' => ($this->targetDirs[4].'/media/images/ref/content'), 'url' => 'media/images/ref/content', 'upload_allow' => array(0 => 'image/png', 1 => 'image/jpg', 2 => 'image/jpeg'), 'upload_deny' => array(0 => 'all'), 'upload_max_size' => '25M', 'showhidden' => false, 'relative_url' => false)), 'debug' => false), 'locale' => NULL, 'tinymce_popup_path' => ''), $this->get('request'));
    }
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);
        $instance->addListenerService('security.interactive_login', array(0 => 'fos_user.security.interactive_login_listener', 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.view_response_listener', 1 => 'onKernelController'), -10);
        $instance->addListenerService('kernel.view', array(0 => 'fos_rest.view_response_listener', 1 => 'onKernelView'), 100);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 10);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.format_listener', 1 => 'onKernelRequest'), 20);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.mime_type_listener', 1 => 'onKernelRequest'), 200);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.param_fetcher_listener', 1 => 'onKernelController'), 5);
        $instance->addListenerService('kernel.response', array(0 => 'sonata.block.cache.handler.default', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('rsqueue.producer', array(0 => 'rs_queue.data_collector', 1 => 'onProducerAction'), 0);
        $instance->addListenerService('rsqueue.publisher', array(0 => 'rs_queue.data_collector', 1 => 'onPublisherAction'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'nordcode_admin.admin_locale_listener', 1 => 'onKernelRequest'), 128);
        $instance->addListenerService('kernel.exception', array(0 => 'nordcode_switchfit.access_denied_exception_listener', 1 => 'onKernelException'), 1);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('debug.emergency_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('stof_doctrine_extensions.event_listener.locale', 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener');
        return $instance;
    }
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[4].'/repo/branch/app/switchfit/Resources'));
    }
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider($this->get('session'), '871e380fa4b9514cabeb1317e15b1ad0');
    }
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'fos_user_group' => 'fos_user.group.form.type', 'sonata_security_roles' => 'sonata.user.form.type.security_roles', 'sonata_user_profile' => 'sonata.user.profile.form.type', 'sonata_user_gender' => 'sonata.user.form.gender_list', 'sonata_user_registration' => 'sonata.user.registration.form.type', 'sonata_user_api_form_group' => 'sonata.user.api.form.type.group', 'sonata_user_api_form_user' => 'sonata.user.api.form.type.user', 'switchfit_landing_registration_form_type' => 'nordcode_user.registration_form_type', 'nordcode_user_registration_sign_b_form_type' => 'nordcode_user.registration_sign_b_form_type', 'jms_choose_payment_method' => 'payment.form.choose_payment_method_type', 'skrill' => 'nordcode_payment_skrill.form.skrill_type', 'translatable_field' => 'nordcode_translation.form.translatable_field', 'sonata_type_immutable_array' => 'sonata.core.form.type.array', 'sonata_type_boolean' => 'sonata.core.form.type.boolean', 'sonata_type_collection' => 'sonata.core.form.type.collection', 'sonata_type_translatable_choice' => 'sonata.core.form.type.translatable_choice', 'sonata_type_date_range' => 'sonata.core.form.type.date_range', 'sonata_type_datetime_range' => 'sonata.core.form.type.datetime_range', 'sonata_type_date_picker' => 'sonata.core.form.type.date_picker', 'sonata_type_datetime_picker' => 'sonata.core.form.type.datetime_picker', 'sonata_type_equal' => 'sonata.core.form.type.equal', 'sonata_type_admin' => 'sonata.admin.form.type.admin', 'sonata_type_model' => 'sonata.admin.form.type.model_choice', 'sonata_type_model_list' => 'sonata.admin.form.type.model_list', 'sonata_type_model_reference' => 'sonata.admin.form.type.model_reference', 'sonata_type_model_hidden' => 'sonata.admin.form.type.model_hidden', 'sonata_type_filter_number' => 'sonata.admin.form.filter.type.number', 'sonata_type_filter_choice' => 'sonata.admin.form.filter.type.choice', 'sonata_type_filter_default' => 'sonata.admin.form.filter.type.default', 'sonata_type_filter_date' => 'sonata.admin.form.filter.type.date', 'sonata_type_filter_date_range' => 'sonata.admin.form.filter.type.daterange', 'sonata_type_filter_datetime' => 'sonata.admin.form.filter.type.datetime', 'sonata_type_filter_datetime_range' => 'sonata.admin.form.filter.type.datetime_range', 'sonata_block_service_choice' => 'sonata.block.form.type.block', 'sonata_type_container_template_choice' => 'sonata.block.form.type.container_template', 'ckeditor' => 'ivory_ck_editor.form.type', 'sonata_json' => 'nordcode_admin.form.sonata_json', 'uploader_file' => 'nordcode_uploader.form.uploader_file', 'sonata_uploader_file' => 'nordcode_uploader.form.sonata_uploader_file'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'nelmio_api_doc.form.extension.description_form_type_extension', 4 => 'sonata.admin.form.extension.field'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token', $this->get('translator.default'), 'validators');
    }
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension();
    }
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }
    protected function getFosRest_BodyListenerService()
    {
        return $this->services['fos_rest.body_listener'] = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'), false);
    }
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\RestBundle\Decoder\JsonToFormDecoder();
    }
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }
    protected function getFosRest_DecoderProviderService()
    {
        $this->services['fos_rest.decoder_provider'] = $instance = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getFosRest_FormatListenerService()
    {
        return $this->services['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener($this->get('fos_rest.format_negotiator'));
    }
    protected function getFosRest_FormatNegotiatorService()
    {
        $this->services['fos_rest.format_negotiator'] = $instance = new \FOS\RestBundle\Util\FormatNegotiator();
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api', NULL, NULL), array('priorities' => array(0 => 'json', 1 => '*/*'), 'fallback_format' => 'json', 'prefer_extension' => '2.0', 'methods' => NULL));
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/assets/css', NULL, NULL), array('priorities' => array(0 => 'css', 1 => '*/*'), 'fallback_format' => 'css', 'prefer_extension' => '2.0', 'methods' => NULL));
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/assets/js', NULL, NULL), array('priorities' => array(0 => 'js', 1 => '*/*'), 'fallback_format' => 'js', 'prefer_extension' => '2.0', 'methods' => NULL));
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/payment', NULL, NULL), array('priorities' => array(0 => '*/*'), 'fallback_format' => 'html', 'prefer_extension' => '2.0', 'methods' => NULL));
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/', NULL, NULL), array('priorities' => array(0 => 'html', 1 => 'json', 2 => '*/*'), 'fallback_format' => NULL, 'prefer_extension' => '2.0', 'methods' => NULL));
        return $instance;
    }
    protected function getFosRest_Inflector_DoctrineService()
    {
        return $this->services['fos_rest.inflector.doctrine'] = new \FOS\RestBundle\Util\Inflector\DoctrineInflector();
    }
    protected function getFosRest_MimeTypeListenerService()
    {
        return $this->services['fos_rest.mime_type_listener'] = new \FOS\RestBundle\EventListener\MimeTypeListener(array('html' => array(0 => 'text/html'), 'css' => array(0 => 'text/css'), 'js' => array(0 => 'application/javascript'), 'json' => array(0 => 'application/json', 1 => 'application/x-json', 2 => 'application/vnd.example-com.foo+json'), 'xml' => array(0 => 'application/xml', 1 => 'text/xml'), 'jpg' => 'image/jpeg', 'png' => 'image/png'), $this->get('fos_rest.format_negotiator'));
    }
    protected function getFosRest_ParamFetcherListenerService()
    {
        return $this->services['fos_rest.param_fetcher_listener'] = new \FOS\RestBundle\EventListener\ParamFetcherListener($this, true);
    }
    protected function getFosRest_Request_ParamFetcherService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_rest.request.param_fetcher', 'request');
        }
        return $this->services['fos_rest.request.param_fetcher'] = $this->scopedServices['request']['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this->get('fos_rest.request.param_fetcher.reader'), $this->get('request'), $this->get('validator'));
    }
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader($this->get('annotation_reader'));
    }
    protected function getFosRest_Routing_Loader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.controller'] = new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $this->get('file_locator'), $this->get('controller_name_converter'), $this->get('fos_rest.routing.loader.reader.controller'), 'json');
    }
    protected function getFosRest_Routing_Loader_ProcessorService()
    {
        return $this->services['fos_rest.routing.loader.processor'] = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
    }
    protected function getFosRest_Routing_Loader_Reader_ActionService()
    {
        return $this->services['fos_rest.routing.loader.reader.action'] = new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($this->get('annotation_reader'), $this->get('fos_rest.request.param_fetcher.reader'), $this->get('fos_rest.inflector.doctrine'), false, array('json' => false));
    }
    protected function getFosRest_Routing_Loader_Reader_ControllerService()
    {
        return $this->services['fos_rest.routing.loader.reader.controller'] = new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader($this->get('fos_rest.routing.loader.reader.action'), $this->get('annotation_reader'));
    }
    protected function getFosRest_Routing_Loader_XmlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.xml_collection'] = new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'), false, array('json' => false), 'json');
    }
    protected function getFosRest_Routing_Loader_YamlCollectionService()
    {
        return $this->services['fos_rest.routing.loader.yaml_collection'] = new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($this->get('file_locator'), $this->get('fos_rest.routing.loader.processor'), false, array('json' => false), 'json');
    }
    protected function getFosRest_View_ExceptionWrapperHandlerService()
    {
        return $this->services['fos_rest.view.exception_wrapper_handler'] = new \FOS\RestBundle\View\ExceptionWrapperHandler();
    }
    protected function getFosRest_ViewHandlerService()
    {
        $this->services['fos_rest.view_handler'] = $instance = new \Nordcode\RestBundle\View\ViewHandler(array('json' => false), 400, 204, true, array('html' => 302), 'twig');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getFosRest_ViewResponseListenerService()
    {
        return $this->services['fos_rest.view_response_listener'] = new \FOS\RestBundle\EventListener\ViewResponseListener($this);
    }
    protected function getFosUser_ChangePassword_FormService()
    {
        return $this->services['fos_user.change_password.form'] = $this->get('form.factory')->createNamed('fos_user_change_password_form', 'fos_user_change_password', NULL, array('validation_groups' => array(0 => 'ChangePassword', 1 => 'Default')));
    }
    protected function getFosUser_ChangePassword_Form_Handler_DefaultService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.change_password.form.handler.default', 'request');
        }
        return $this->services['fos_user.change_password.form.handler.default'] = $this->scopedServices['request']['fos_user.change_password.form.handler.default'] = new \FOS\UserBundle\Form\Handler\ChangePasswordFormHandler($this->get('fos_user.change_password.form'), $this->get('request'), $this->get('nordcode_user.user_manager'));
    }
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType();
    }
    protected function getFosUser_Group_FormService()
    {
        return $this->services['fos_user.group.form'] = $this->get('form.factory')->createNamed('fos_user_group_form', 'fos_user_group', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }
    protected function getFosUser_Group_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.group.form.handler', 'request');
        }
        return $this->services['fos_user.group.form.handler'] = $this->scopedServices['request']['fos_user.group.form.handler'] = new \FOS\UserBundle\Form\Handler\GroupFormHandler($this->get('fos_user.group.form'), $this->get('request'), $this->get('fos_user.group_manager'));
    }
    protected function getFosUser_Group_Form_TypeService()
    {
        return $this->services['fos_user.group.form.type'] = new \FOS\UserBundle\Form\Type\GroupFormType('Nordcode\\UserBundle\\Entity\\Group');
    }
    protected function getFosUser_GroupManagerService()
    {
        return $this->services['fos_user.group_manager'] = new \FOS\UserBundle\Doctrine\GroupManager($this->get('fos_user.entity_manager'), 'Nordcode\\UserBundle\\Entity\\Group');
    }
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\NoopMailer();
    }
    protected function getFosUser_Profile_FormService()
    {
        return $this->services['fos_user.profile.form'] = $this->get('form.factory')->createNamed('fos_user_profile_form', 'fos_user_profile', NULL, array('validation_groups' => array(0 => 'Profile', 1 => 'Default')));
    }
    protected function getFosUser_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.profile.form.handler', 'request');
        }
        return $this->services['fos_user.profile.form.handler'] = $this->scopedServices['request']['fos_user.profile.form.handler'] = new \FOS\UserBundle\Form\Handler\ProfileFormHandler($this->get('fos_user.profile.form'), $this->get('request'), $this->get('nordcode_user.user_manager'));
    }
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('Nordcode\\UserBundle\\Entity\\User');
    }
    protected function getFosUser_Registration_FormService()
    {
        return $this->services['fos_user.registration.form'] = $this->get('form.factory')->createNamed('fos_user_registration_form', 'nordcode_user_registration_sign_b_form_type', NULL, array('validation_groups' => array(0 => 'RegistrationStep2')));
    }
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('Nordcode\\UserBundle\\Entity\\User');
    }
    protected function getFosUser_Resetting_FormService()
    {
        return $this->services['fos_user.resetting.form'] = $this->get('form.factory')->createNamed('', 'fos_user_resetting', NULL, array('validation_groups' => array(0 => 'ResetPassword', 1 => 'Default')));
    }
    protected function getFosUser_Resetting_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.resetting.form.handler', 'request');
        }
        return $this->services['fos_user.resetting.form.handler'] = $this->scopedServices['request']['fos_user.resetting.form.handler'] = new \FOS\UserBundle\Form\Handler\ResettingFormHandler($this->get('fos_user.resetting.form'), $this->get('request'), $this->get('nordcode_user.user_manager'));
    }
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType();
    }
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\Security\InteractiveLoginListener($this->get('nordcode_user.user_manager'));
    }
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.context'), $this->get('hwi_oauth.user_checker'), $this->get('security.authentication.session_strategy'), $this);
    }
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('nordcode_user.user_manager')));
    }
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('nordcode_user.user_manager'));
    }
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), false);
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));
        return $instance;
    }
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getGaufrette_CityImageFsFilesystemService()
    {
        return $this->services['gaufrette.city_image_fs_filesystem'] = new \Gaufrette\Filesystem($this->get('nordcode_uploader.city.adapter.filesystem.local'));
    }
    protected function getGaufrette_DiaryPictureFsFilesystemService()
    {
        return $this->services['gaufrette.diary_picture_fs_filesystem'] = new \Gaufrette\Filesystem($this->get('nordcode_uploader.diary.adapter.filesystem.local'));
    }
    protected function getGaufrette_MealImageFsFilesystemService()
    {
        return $this->services['gaufrette.meal_image_fs_filesystem'] = new \Gaufrette\Filesystem($this->get('nordcode_uploader.meal.adapter.filesystem.local'));
    }
    protected function getGaufrette_QuestImageFsFilesystemService()
    {
        return $this->services['gaufrette.quest_image_fs_filesystem'] = new \Gaufrette\Filesystem($this->get('nordcode_uploader.quest.adapter.filesystem.local'));
    }
    protected function getGaufrette_SfLifeHeaderFsFilesystemService()
    {
        return $this->services['gaufrette.sf_life_header_fs_filesystem'] = new \Gaufrette\Filesystem($this->get('nordcode_uploader.sf_life.adapter.filesystem.local'));
    }
    protected function getGaufrette_SfLifeVideoPreviewFsFilesystemService()
    {
        return $this->services['gaufrette.sf_life_video_preview_fs_filesystem'] = new \Gaufrette\Filesystem($this->get('nordcode_uploader.sf_life.adapter.filesystem.local'));
    }
    protected function getGaufrette_UserPictureFsFilesystemService()
    {
        return $this->services['gaufrette.user_picture_fs_filesystem'] = new \Gaufrette\Filesystem($this->get('nordcode_uploader.user.adapter.filesystem.local'));
    }
    protected function getGaufrette_WorkoutImageFsFilesystemService()
    {
        return $this->services['gaufrette.workout_image_fs_filesystem'] = new \Gaufrette\Filesystem($this->get('nordcode_uploader.workout.adapter.filesystem.local'));
    }
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('event_dispatcher'), $this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }
    protected function getHwiOauth_HttpClientService()
    {
        $this->services['hwi_oauth.http_client'] = $instance = new \Buzz\Client\Curl();
        $instance->setVerifyPeer(true);
        $instance->setTimeout(5);
        $instance->setMaxRedirects(5);
        $instance->setIgnoreErrors(true);
        return $instance;
    }
    protected function getHwiOauth_ResourceOwner_FacebookService()
    {
        return $this->services['hwi_oauth.resource_owner.facebook'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\FacebookResourceOwner($this->get('hwi_oauth.http_client'), $this->get('security.http_utils'), array('client_id' => 139200083077684, 'client_secret' => 'ce9dd5da470b19ddd2b0b04e8536a598', 'scope' => 'public_profile, email', 'paths' => array(), 'options' => array()), 'facebook', new \HWI\Bundle\OAuthBundle\OAuth\RequestDataStorage\SessionStorage($this->get('session')));
    }
    protected function getHwiOauth_ResourceOwnermap_MainService()
    {
        $this->services['hwi_oauth.resource_ownermap.main'] = $instance = new \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMap($this->get('security.http_utils'), array(0 => 'facebook'), array('facebook' => '/connect/check-facebook'));
        $instance->setContainer($this);
        return $instance;
    }
    protected function getHwiOauth_Security_OauthUtilsService()
    {
        $this->services['hwi_oauth.security.oauth_utils'] = $instance = new \HWI\Bundle\OAuthBundle\Security\OAuthUtils($this->get('security.http_utils'), $this->get('security.context'), false);
        $instance->setResourceOwnerMap($this->get('hwi_oauth.resource_ownermap.main'));
        return $instance;
    }
    protected function getHwiOauth_Templating_Helper_OauthService()
    {
        $this->services['hwi_oauth.templating.helper.oauth'] = $instance = new \HWI\Bundle\OAuthBundle\Templating\Helper\OAuthHelper($this->get('hwi_oauth.security.oauth_utils'));
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getHwiOauth_UserCheckerService()
    {
        return $this->services['hwi_oauth.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }
    protected function getIvoryCkEditor_ConfigManagerService()
    {
        $this->services['ivory_ck_editor.config_manager'] = $instance = new \Ivory\CKEditorBundle\Model\ConfigManager();
        $instance->setConfig('default', array('filebrowserBrowseRoute' => 'elfinder', 'filebrowserBrowseRouteParameters' => array('instance' => 'ckeditor'), 'toolbar' => array(0 => array(0 => 'Source'), 1 => array(0 => 'Bold', 1 => 'Italic', 2 => 'Underline', 3 => 'Strike', 4 => 'Subscript', 5 => 'Superscript', 6 => '-', 7 => 'RemoveFormat'), 2 => array(0 => 'Cut', 1 => 'Copy', 2 => 'Paste', 3 => 'PasteText', 4 => 'PasteFromWord', 5 => '-', 6 => 'Undo', 7 => 'Redo'), 3 => array(0 => 'NumberedList', 1 => 'BulletedList', 2 => '-', 3 => 'Outdent', 4 => 'Indent', 5 => '-', 6 => 'Blockquote', 7 => 'CreateDiv', 8 => '-', 9 => 'JustifyLeft', 10 => 'JustifyCenter', 11 => 'JustifyRight', 12 => 'JustifyBlock'), 4 => '/', 5 => array(0 => 'Image', 1 => 'Table', 2 => 'HorizontalRule', 3 => 'SpecialChar'), 6 => array(0 => 'Link', 1 => 'Unlink', 2 => 'Anchor'), 7 => array(0 => 'Styles', 1 => 'Format', 2 => 'Font', 3 => 'FontSize'), 8 => array(0 => 'TextColor', 1 => 'BGColor'), 9 => array(0 => 'Maximize', 1 => 'ShowBlocks')), 'uiColor' => '#ffffff', 'allowedContent' => true, 'autoParagraph' => false, 'disableNativeSpellChecker' => false));
        $instance->setDefaultConfig('default');
        return $instance;
    }
    protected function getIvoryCkEditor_Form_TypeService()
    {
        return $this->services['ivory_ck_editor.form.type'] = new \Ivory\CKEditorBundle\Form\Type\CKEditorType(true, true, 'bundles/ivoryckeditor/', 'bundles/ivoryckeditor/ckeditor.js', $this->get('ivory_ck_editor.config_manager'), $this->get('ivory_ck_editor.plugin_manager'), $this->get('ivory_ck_editor.styles_set_manager'), $this->get('ivory_ck_editor.template_manager'));
    }
    protected function getIvoryCkEditor_PluginManagerService()
    {
        return $this->services['ivory_ck_editor.plugin_manager'] = new \Ivory\CKEditorBundle\Model\PluginManager();
    }
    protected function getIvoryCkEditor_StylesSetManagerService()
    {
        return $this->services['ivory_ck_editor.styles_set_manager'] = new \Ivory\CKEditorBundle\Model\StylesSetManager();
    }
    protected function getIvoryCkEditor_TemplateManagerService()
    {
        return $this->services['ivory_ck_editor.template_manager'] = new \Ivory\CKEditorBundle\Model\TemplateManager();
    }
    protected function getIvoryCkEditor_Templating_HelperService()
    {
        return $this->services['ivory_ck_editor.templating.helper'] = new \Ivory\CKEditorBundle\Templating\CKEditorHelper($this);
    }
    protected function getIvoryCkEditor_TwigExtensionService()
    {
        return $this->services['ivory_ck_editor.twig_extension'] = new \Ivory\CKEditorBundle\Twig\CKEditorExtension($this->get('ivory_ck_editor.templating.helper'));
    }
    protected function getJmsSerializerService()
    {
        $a = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $a->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 1 => array(0 => array(0 => 'nordcode_uploader.listener.serialization_listener', 1 => 'onPreSerializeMealPhoto'), 1 => 'nordcode\\corebundle\\entity\\mealphoto', 2 => NULL), 2 => array(0 => array(0 => 'nordcode_uploader.listener.serialization_listener', 1 => 'onPreSerializeWorkoutPhoto'), 1 => 'nordcode\\corebundle\\entity\\workoutphoto', 2 => NULL), 3 => array(0 => array(0 => 'nordcode_uploader.listener.serialization_listener', 1 => 'onPreSerializeDiary'), 1 => 'nordcode\\corebundle\\entity\\diary', 2 => NULL), 4 => array(0 => array(0 => 'nordcode_uploader.listener.serialization_listener', 1 => 'onPreSerializeDiaryEntry'), 1 => 'nordcode\\corebundle\\entity\\diaryentry', 2 => NULL), 5 => array(0 => array(0 => 'nordcode_uploader.listener.serialization_listener', 1 => 'onPreSerializeUser'), 1 => 'nordcode\\userbundle\\entity\\user', 2 => NULL), 6 => array(0 => array(0 => 'nordcode_uploader.listener.serialization_listener', 1 => 'onPreSerializeLifeHeader'), 1 => 'nordcode\\corebundle\\entity\\sflifeheader', 2 => NULL), 7 => array(0 => array(0 => 'nordcode_uploader.listener.serialization_listener', 1 => 'onPreSerializeCity'), 1 => 'nordcode\\geobundle\\entity\\city', 2 => NULL), 8 => array(0 => array(0 => 'nordcode_uploader.listener.serialization_listener', 1 => 'onPreSerializeLifeVideo'), 1 => 'nordcode\\corebundle\\entity\\sflifevideo', 2 => NULL), 9 => array(0 => array(0 => 'nordcode_uploader.listener.serialization_listener', 1 => 'onPreSerializeQuestPhoto'), 1 => 'nordcode\\questbundle\\entity\\questphoto', 2 => NULL))));
        return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer($this->get('jms_serializer.metadata_factory'), $this->get('jms_serializer.handler_registry'), $this->get('jms_serializer.unserialize_object_constructor'), new \JMS\DiExtraBundle\DependencyInjection\Collection\LazyServiceMap($this, array('json' => 'jms_serializer.json_serialization_visitor', 'xml' => 'jms_serializer.xml_serialization_visitor', 'yml' => 'jms_serializer.yaml_serialization_visitor')), new \JMS\DiExtraBundle\DependencyInjection\Collection\LazyServiceMap($this, array('json' => 'jms_serializer.json_deserialization_visitor', 'xml' => 'jms_serializer.xml_deserialization_visitor')), $a);
    }
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler();
    }
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('c', 'UTC', true);
    }
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber();
    }
    protected function getJmsSerializer_FormErrorHandlerService()
    {
        return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler($this->get('translator.default'));
    }
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(2 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap')), 'sonata_user_user_id' => array('json' => array(0 => 'sonata.user.serializer.handler.user', 1 => 'deserializeObjectFromId'), 'xml' => array(0 => 'sonata.user.serializer.handler.user', 1 => 'deserializeObjectFromId'), 'yml' => array(0 => 'sonata.user.serializer.handler.user', 1 => 'deserializeObjectFromId')), 'Nordcode\\RestBundle\\Serializer\\AssocCollection' => array('xml' => array(0 => 'nordcode_rest.assoc_collection_handler', 1 => 'deserializeCollection'), 'json' => array(0 => 'nordcode_rest.assoc_collection_handler', 1 => 'deserializeCollection'))), 1 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'nordcode_rest.form_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToyml')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml')), 'sonata_user_user_id' => array('json' => array(0 => 'sonata.user.serializer.handler.user', 1 => 'serializeObjectToId'), 'xml' => array(0 => 'sonata.user.serializer.handler.user', 1 => 'serializeObjectToId'), 'yml' => array(0 => 'sonata.user.serializer.handler.user', 1 => 'serializeObjectToId')), 'Nordcode\\RestBundle\\Serializer\\AssocCollection' => array('xml' => array(0 => 'nordcode_rest.assoc_collection_handler', 1 => 'serializeCollection'), 'json' => array(0 => 'nordcode_rest.assoc_collection_handler', 1 => 'serializeCollection')))));
    }
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor($this->get('nordcode_rest.identical_property_naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
    }
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor($this->get('nordcode_rest.identical_property_naming_strategy'));
        $instance->setOptions(0);
        return $instance;
    }
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array('Symfony\\Bundle\\FrameworkBundle' => ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/config/serializer'), 'Symfony\\Bundle\\SecurityBundle' => ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/config/serializer'), 'Symfony\\Bundle\\TwigBundle' => ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/config/serializer'), 'Symfony\\Bundle\\MonologBundle' => ($this->targetDirs[4].'/repo/branch/vendor/symfony/monolog-bundle/Symfony/Bundle/MonologBundle/Resources/config/serializer'), 'Symfony\\Bundle\\AsseticBundle' => ($this->targetDirs[4].'/repo/branch/vendor/symfony/assetic-bundle/Symfony/Bundle/AsseticBundle/Resources/config/serializer'), 'Symfony\\Bundle\\SwiftmailerBundle' => ($this->targetDirs[4].'/repo/branch/vendor/symfony/swiftmailer-bundle/Resources/config/serializer'), 'JMS\\SerializerBundle' => ($this->targetDirs[4].'/repo/branch/vendor/jms/serializer-bundle/JMS/SerializerBundle/Resources/config/serializer'), 'Doctrine\\Bundle\\DoctrineBundle' => ($this->targetDirs[4].'/repo/branch/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/config/serializer'), 'Stof\\DoctrineExtensionsBundle' => ($this->targetDirs[4].'/repo/branch/vendor/stof/doctrine-extensions-bundle/Stof/DoctrineExtensionsBundle/Resources/config/serializer'), 'Knp\\Bundle\\MenuBundle' => ($this->targetDirs[4].'/repo/branch/vendor/knplabs/knp-menu-bundle/Knp/Bundle/MenuBundle/Resources/config/serializer'), 'Snc\\RedisBundle' => ($this->targetDirs[4].'/repo/branch/vendor/snc/redis-bundle/Snc/RedisBundle/Resources/config/serializer'), 'FOS\\UserBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/UserBundle/Resources/config/serializer/FOSUser'), 'Sonata\\UserBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/UserBundle/Resources/config/serializer/SonataUser'), 'Nordcode\\UserBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/UserBundle/Resources/config/serializer'), 'JMS\\Payment\\CoreBundle' => ($this->targetDirs[4].'/repo/branch/vendor/jms/payment-core-bundle/JMS/Payment/CoreBundle/Resources/config/serializer'), 'Nordcode\\HelperBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/HelperBundle/Resources/config/serializer'), 'Nordcode\\CoreBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/CoreBundle/Resources/config/serializer'), 'Nordcode\\GeoBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/GeoBundle/Resources/config/serializer'), 'Nordcode\\PaymentSkrillBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/PaymentSkrillBundle/Resources/config/serializer'), 'Nordcode\\TranslationBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/TranslationBundle/Resources/config/serializer'), 'Nordcode\\LoggerBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/LoggerBundle/Resources/config/serializer'), 'Doctrine\\Bundle\\MigrationsBundle' => ($this->targetDirs[4].'/repo/branch/vendor/doctrine/doctrine-migrations-bundle/Doctrine/Bundle/MigrationsBundle/Resources/config/serializer'), 'FOS\\RestBundle' => ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/rest-bundle/FOS/RestBundle/Resources/config/serializer'), 'Nelmio\\ApiDocBundle' => ($this->targetDirs[4].'/repo/branch/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/config/serializer'), 'Sonata\\jQueryBundle' => ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/jquery-bundle/Sonata/jQueryBundle/Resources/config/serializer'), 'Sonata\\CoreBundle' => ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/config/serializer'), 'Sonata\\AdminBundle' => ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/config/serializer'), 'Sonata\\DoctrineORMAdminBundle' => ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/config/serializer'), 'Sonata\\BlockBundle' => ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/block-bundle/Resources/config/serializer'), 'Knp\\Bundle\\GaufretteBundle' => ($this->targetDirs[4].'/repo/branch/vendor/knplabs/knp-gaufrette-bundle/Knp/Bundle/GaufretteBundle/Resources/config/serializer'), 'Vich\\UploaderBundle' => ($this->targetDirs[4].'/repo/branch/vendor/vich/uploader-bundle/Resources/config/serializer'), 'Mmoreram\\RSQueueBundle' => ($this->targetDirs[4].'/repo/branch/vendor/mmoreram/rsqueue-bundle/Mmoreram/RSQueueBundle/Resources/config/serializer'), 'Bazinga\\Bundle\\JsTranslationBundle' => ($this->targetDirs[4].'/repo/branch/vendor/willdurand/js-translation-bundle/Bazinga/Bundle/JsTranslationBundle/Resources/config/serializer'), 'Ivory\\CKEditorBundle' => ($this->targetDirs[4].'/repo/branch/vendor/egeloen/ckeditor-bundle/Resources/config/serializer'), 'FM\\ElfinderBundle' => ($this->targetDirs[4].'/repo/branch/vendor/helios-ag/fm-elfinder-bundle/FM/ElfinderBundle/Resources/config/serializer'), 'Nordcode\\AdminBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/AdminBundle/Resources/config/serializer'), 'Nordcode\\RestBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/RestBundle/Resources/config/serializer'), 'Nordcode\\SwitchfitBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/SwitchfitBundle/Resources/config/serializer'), 'Nordcode\\ApiDocBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/ApiDocBundle/Resources/config/serializer'), 'Nordcode\\UploaderBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/UploaderBundle/Resources/config/serializer'), 'Nordcode\\AcademyBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/AcademyBundle/Resources/config/serializer'), 'Nordcode\\NotificationBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/NotificationBundle/Resources/config/serializer'), 'Nordcode\\QABundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/QABundle/Resources/config/serializer'), 'Nordcode\\AdminPageBoardBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/AdminPageBoardBundle/Resources/config/serializer'), 'Nordcode\\QuestBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/QuestBundle/Resources/config/serializer'), 'Nordcode\\PointBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/PointBundle/Resources/config/serializer'), 'Nordcode\\SignupBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/SignupBundle/Resources/config/serializer'), 'HWI\\Bundle\\OAuthBundle' => ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/config/serializer'), 'Nordcode\\TippsBundle' => ($this->targetDirs[4].'/repo/branch/src/Nordcode/TippsBundle/Resources/config/serializer')));
        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')))), $this->get('doctrine'));
    }
    protected function getJmsSerializer_ObjectConstructorService()
    {
        return $this->services['jms_serializer.object_constructor'] = new \JMS\Serializer\Construction\DoctrineObjectConstructor($this->get('doctrine'), $this->get('jms_serializer.unserialize_object_constructor'));
    }
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper($this->get('jms_serializer'));
    }
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor($this->get('nordcode_rest.identical_property_naming_strategy'), $this->get('jms_serializer.unserialize_object_constructor'));
        $instance->setDoctypeWhitelist(array(0 => '<!DOCTYPE authorized SYSTEM "http://some_url">'));
        return $instance;
    }
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        return $this->services['jms_serializer.xml_serialization_visitor'] = new \JMS\Serializer\XmlSerializationVisitor($this->get('nordcode_rest.identical_property_naming_strategy'));
    }
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor($this->get('nordcode_rest.identical_property_naming_strategy'));
    }
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }
    protected function getKnpGaufrette_FilesystemMapService()
    {
        return $this->services['knp_gaufrette.filesystem_map'] = new \Knp\Bundle\GaufretteBundle\FilesystemMap(array('quest_image_fs' => $this->get('gaufrette.quest_image_fs_filesystem'), 'meal_image_fs' => $this->get('gaufrette.meal_image_fs_filesystem'), 'workout_image_fs' => $this->get('gaufrette.workout_image_fs_filesystem'), 'user_picture_fs' => $this->get('gaufrette.user_picture_fs_filesystem'), 'diary_picture_fs' => $this->get('gaufrette.diary_picture_fs_filesystem'), 'sf_life_header_fs' => $this->get('gaufrette.sf_life_header_fs_filesystem'), 'sf_life_video_preview_fs' => $this->get('gaufrette.sf_life_video_preview_fs_filesystem'), 'city_image_fs' => $this->get('gaufrette.city_image_fs_filesystem')));
    }
    protected function getKnpMenu_FactoryService()
    {
        return $this->services['knp_menu.factory'] = new \Knp\Menu\Silex\RouterAwareFactory($this->get('router'));
    }
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array()), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(array(), 'UTF-8');
    }
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', array());
    }
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }
    protected function getLocaleListenerService()
    {
        $this->services['locale_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('de', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true);
    }
    protected function getMonolog_Handler_NestedService()
    {
        return $this->services['monolog.handler.nested'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[4].'/logs/sf/switchfit/prod.log'), 100, true);
    }
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_EmergencyService()
    {
        $this->services['monolog.logger.emergency'] = $instance = new \Symfony\Bridge\Monolog\Logger('emergency');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_SncRedisService()
    {
        $this->services['monolog.logger.snc_redis'] = $instance = new \Symfony\Bridge\Monolog\Logger('snc_redis');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getNelmioApiDoc_DocCommentExtractorService()
    {
        return $this->services['nelmio_api_doc.doc_comment_extractor'] = new \Nelmio\ApiDocBundle\Util\DocCommentExtractor();
    }
    protected function getNelmioApiDoc_Extractor_ApiDocExtractorService()
    {
        $a = $this->get('nelmio_api_doc.doc_comment_extractor');
        $this->services['nelmio_api_doc.extractor.api_doc_extractor'] = $instance = new \Nelmio\ApiDocBundle\Extractor\ApiDocExtractor($this, $this->get('router'), $this->get('annotation_reader'), $a, array(0 => new \Nelmio\ApiDocBundle\Extractor\Handler\FosRestHandler(), 1 => new \Nelmio\ApiDocBundle\Extractor\Handler\JmsSecurityExtraHandler(), 2 => new \Nelmio\ApiDocBundle\Extractor\Handler\SensioFrameworkExtraHandler(), 3 => new \Nelmio\ApiDocBundle\Extractor\Handler\PhpDocHandler($a)));
        $instance->addParser($this->get('nelmio_api_doc.parser.form_type_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.validation_parser'));
        $instance->addParser($this->get('nelmio_api_doc.parser.jms_metadata_parser'));
        return $instance;
    }
    protected function getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService()
    {
        return $this->services['nelmio_api_doc.form.extension.description_form_type_extension'] = new \Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension();
    }
    protected function getNelmioApiDoc_Formatter_AbstractFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.abstract_formatter'] = new \Nelmio\ApiDocBundle\Formatter\AbstractFormatter();
    }
    protected function getNelmioApiDoc_Formatter_HtmlFormatterService()
    {
        $this->services['nelmio_api_doc.formatter.html_formatter'] = $instance = new \Nelmio\ApiDocBundle\Formatter\HtmlFormatter();
        $instance->setTemplatingEngine($this->get('templating'));
        $instance->setMotdTemplate('NelmioApiDocBundle::Components/motd.html.twig');
        $instance->setApiName('SwitchFit API');
        $instance->setEnableSandbox(false);
        $instance->setEndpoint(NULL);
        $instance->setRequestFormatMethod('format_param');
        $instance->setDefaultRequestFormat('json');
        $instance->setAcceptType(NULL);
        $instance->setBodyFormat('form');
        $instance->setAuthentication(NULL);
        return $instance;
    }
    protected function getNelmioApiDoc_Formatter_MarkdownFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.markdown_formatter'] = new \Nelmio\ApiDocBundle\Formatter\MarkdownFormatter();
    }
    protected function getNelmioApiDoc_Formatter_SimpleFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.simple_formatter'] = new \Nelmio\ApiDocBundle\Formatter\SimpleFormatter();
    }
    protected function getNelmioApiDoc_Parser_FormTypeParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_type_parser'] = new \Nordcode\ApiDocBundle\Parser\FormTypeParser($this->get('form.factory'));
    }
    protected function getNelmioApiDoc_Parser_JmsMetadataParserService()
    {
        return $this->services['nelmio_api_doc.parser.jms_metadata_parser'] = new \Nelmio\ApiDocBundle\Parser\JmsMetadataParser($this->get('jms_serializer.metadata_factory'), $this->get('nordcode_rest.identical_property_naming_strategy'), $this->get('nelmio_api_doc.doc_comment_extractor'));
    }
    protected function getNelmioApiDoc_Parser_ValidationParserService()
    {
        return $this->services['nelmio_api_doc.parser.validation_parser'] = new \Nelmio\ApiDocBundle\Parser\ValidationParser($this->get('validator.mapping.class_metadata_factory'));
    }
    protected function getNelmioApiDoc_Twig_Extension_ExtraMarkdownService()
    {
        return $this->services['nelmio_api_doc.twig.extension.extra_markdown'] = new \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension();
    }
    protected function getNordcodeAcademy_AcademyManagerService()
    {
        return $this->services['nordcode_academy.academy_manager'] = new \Nordcode\AcademyBundle\Entity\Manager\AcademyManager($this->get('doctrine.orm.switchfit_entity_manager'), $this->get('nordcode_core.course_manager'), $this->get('nordcode_point.activity_manager'));
    }
    protected function getNordcodeAcademy_Admin_AcademyService()
    {
        $instance = new \Nordcode\AcademyBundle\Admin\AcademyAdmin('nordcode_academy.admin.academy', 'Nordcode\\AcademyBundle\\Entity\\Academy', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('AcademyBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('academy');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeAcademy_Admin_AcademyHasModuleService()
    {
        $instance = new \Nordcode\AcademyBundle\Admin\AcademyHasModuleAdmin('nordcode_academy.admin.academy_has_module', 'Nordcode\\AcademyBundle\\Entity\\AcademyHasModule', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('AcademyBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('academy_has_module');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeAcademy_Admin_AnswerService()
    {
        $instance = new \Nordcode\AcademyBundle\Admin\AnswerAdmin('nordcode_academy.admin.answer', 'Nordcode\\AcademyBundle\\Entity\\Answer', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('AcademyBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('answer');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeAcademy_Admin_ModuleService()
    {
        $instance = new \Nordcode\AcademyBundle\Admin\ModuleAdmin('nordcode_academy.admin.module', 'Nordcode\\AcademyBundle\\Entity\\Module', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('AcademyBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('module');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeAcademy_Admin_QuestionService()
    {
        $instance = new \Nordcode\AcademyBundle\Admin\QuestionAdmin('nordcode_academy.admin.question', 'Nordcode\\AcademyBundle\\Entity\\Question', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('AcademyBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('question');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeAcademy_Admin_TopicService()
    {
        $instance = new \Nordcode\AcademyBundle\Admin\TopicAdmin('nordcode_academy.admin.topic', 'Nordcode\\AcademyBundle\\Entity\\Topic', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('AcademyBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('topic');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeAdmin_AdminLocaleListenerService()
    {
        return $this->services['nordcode_admin.admin_locale_listener'] = new \Nordcode\AdminBundle\EventListener\AdminLocaleListener();
    }
    protected function getNordcodeAdmin_Form_SonataJsonService()
    {
        return $this->services['nordcode_admin.form.sonata_json'] = new \Nordcode\AdminBundle\Form\Type\JsonType();
    }
    protected function getNordcodeAdminPageBoard_Block_LoaderService()
    {
        return $this->services['nordcode_admin_page_board.block.loader'] = new \Nordcode\AdminPageBoardBundle\Block\Loader\ServiceLoader(array(0 => 'nordcode_user.admin.block.user_main_data', 1 => 'nordcode_user.admin.block.user_academy', 2 => 'nordcode_user.admin.block.user_course', 3 => 'nordcode_user.admin.block.user_course_health', 4 => 'nordcode_user.admin.block.user_course_weekly', 5 => 'nordcode_user.admin.block.meal_favorite', 6 => 'nordcode_user.admin.block.workout_favorite', 7 => 'nordcode_user.admin.block.diary_entries'));
    }
    protected function getNordcodeAdminPageBoard_Block_Loader_ChainService()
    {
        return $this->services['nordcode_admin_page_board.block.loader.chain'] = new \Nordcode\AdminPageBoardBundle\Block\Loader\BlockLoaderChain(array(0 => $this->get('sonata.block.loader.service'), 1 => $this->get('nordcode_admin_page_board.block.loader')));
    }
    protected function getNordcodeAdminPageBoard_ManagerService()
    {
        return $this->services['nordcode_admin_page_board.manager'] = new \Nordcode\AdminPageBoardBundle\Manager\PageBoardManager($this->get('nordcode_admin_page_board.routes_config'), array('user_details' => array(0 => array('position' => 'left', 'type' => 'nordcode_user.admin.block.user_main_data', 'tab' => 'General', 'settings' => array('title' => 'User data')), 1 => array('position' => 'right', 'type' => 'nordcode_user.admin.block.user_academy', 'tab' => 'General', 'settings' => array('title' => 'Academy progress')), 2 => array('position' => 'left', 'type' => 'nordcode_user.admin.block.user_course', 'tab' => 'General', 'settings' => array('title' => 'Course data')), 3 => array('position' => 'full', 'type' => 'nordcode_user.admin.block.user_course_health', 'tab' => 'Course board', 'settings' => array('title' => 'Course board')), 4 => array('position' => 'full', 'type' => 'nordcode_user.admin.block.user_course_weekly', 'tab' => 'Weekly data', 'settings' => array('title' => 'Weekly board')), 5 => array('position' => 'left', 'type' => 'nordcode_user.admin.block.meal_favorite', 'tab' => 'Favorites', 'settings' => array('title' => 'Meal favorites')), 6 => array('position' => 'right', 'type' => 'nordcode_user.admin.block.workout_favorite', 'tab' => 'Favorites', 'settings' => array('title' => 'Workout favorites')), 7 => array('position' => 'full', 'type' => 'nordcode_user.admin.block.diary_entries', 'tab' => 'Diary', 'settings' => array('title' => 'Diary entries')))), 'NordcodeAdminBundle:Core:page_board.html.twig');
    }
    protected function getNordcodeAdminPageBoard_RoutesConfigService()
    {
        return $this->services['nordcode_admin_page_board.routes_config'] = new \Nordcode\AdminPageBoardBundle\Routing\RouteConfig(array('user_details' => array('name' => 'admin_nordcode_user_user_details', 'path' => '/nordcode/user/user/details/{id}', 'requirements' => array('id' => '\\d+'), 'prefix' => '/admin', 'host' => '', 'schemes' => array(), 'options' => array())), 'admin_nordcode');
    }
    protected function getNordcodeAdminPageBoard_RoutesLoaderService()
    {
        return $this->services['nordcode_admin_page_board.routes_loader'] = new \Nordcode\AdminPageBoardBundle\Routing\RouteLoader($this->get('nordcode_admin_page_board.routes_config'));
    }
    protected function getNordcodeCore_ContactMessageManagerService()
    {
        return $this->services['nordcode_core.contact_message_manager'] = new \Nordcode\CoreBundle\Entity\Manager\ContactMessageManager($this->get('doctrine.orm.switchfit_entity_manager'));
    }
    protected function getNordcodeCore_CourseManagerService()
    {
        return $this->services['nordcode_core.course_manager'] = new \Nordcode\CoreBundle\Entity\Manager\CourseManager($this->get('doctrine.orm.switchfit_entity_manager'), $this->get('nordcode_point.activity_manager'), $this->get('nordcode_core.diary_manager'));
    }
    protected function getNordcodeCore_DiaryManagerService()
    {
        return $this->services['nordcode_core.diary_manager'] = new \Nordcode\CoreBundle\Entity\Manager\DiaryManager($this->get('doctrine.orm.switchfit_entity_manager'), $this->get('nordcode_point.activity_manager'), $this->get('translator.default'), $this->get('nordcode_notification.notice_manager'));
    }
    protected function getNordcodeCore_InspireManagerService()
    {
        return $this->services['nordcode_core.inspire_manager'] = new \Nordcode\CoreBundle\Entity\Manager\InspireManager($this->get('doctrine.orm.switchfit_entity_manager'), $this->get('nordcode_core.course_manager'), $this->get('rs_queue.producer', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getNordcodeCore_MealManagerService()
    {
        return $this->services['nordcode_core.meal_manager'] = new \Nordcode\CoreBundle\Entity\Manager\MealManager($this->get('doctrine.orm.switchfit_entity_manager'));
    }
    protected function getNordcodeCore_QuestionnaireManagerService()
    {
        return $this->services['nordcode_core.questionnaire_manager'] = new \Nordcode\CoreBundle\Entity\Manager\QuestionnaireManager($this->get('doctrine.orm.switchfit_entity_manager'), $this->get('nordcode_core.course_manager'), $this->get('nordcode_user.user_manager'));
    }
    protected function getNordcodeCore_SfLifeService()
    {
        return $this->services['nordcode_core.sf_life'] = new \Nordcode\CoreBundle\Entity\Manager\SFLifeManager($this->get('doctrine.orm.switchfit_entity_manager'));
    }
    protected function getNordcodeCore_SuggestManagerService()
    {
        return $this->services['nordcode_core.suggest_manager'] = new \Nordcode\CoreBundle\Entity\Manager\SuggestManager($this->get('doctrine.orm.switchfit_entity_manager'), $this->get('nordcode_core.course_manager'), $this->get('rs_queue.producer', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getNordcodeCore_WorkoutManagerService()
    {
        return $this->services['nordcode_core.workout_manager'] = new \Nordcode\CoreBundle\Entity\Manager\WorkoutManager($this->get('doctrine.orm.switchfit_entity_manager'), $this->get('nordcode_core.course_manager'));
    }
    protected function getNordcodeGeo_Admin_CityService()
    {
        $instance = new \Nordcode\GeoBundle\Admin\CityAdmin('nordcode_geo.admin.city', 'Nordcode\\GeoBundle\\Entity\\City', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('GeoBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('city');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeGeo_Admin_CountryService()
    {
        $instance = new \Nordcode\GeoBundle\Admin\CountryAdmin('nordcode_geo.admin.country', 'Nordcode\\GeoBundle\\Entity\\Country', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('GeoBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('country');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeGeo_CityManagerService()
    {
        return $this->services['nordcode_geo.city_manager'] = new \Nordcode\GeoBundle\Entity\Manager\CityManager($this->get('doctrine.orm.switchfit_entity_manager'));
    }
    protected function getNordcodeHelper_FormErrorsHandlerService()
    {
        return $this->services['nordcode_helper.form_errors_handler'] = new \Nordcode\HelperBundle\Form\FormErrorsHandler();
    }
    protected function getNordcodeLogger_EmailLogHandlerService()
    {
        return $this->services['nordcode_logger.email_log_handler'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[4].'/logs/sf/switchfit/prod.email.log'), 200);
    }
    protected function getNordcodeLogger_EmailLoggerService()
    {
        $this->services['nordcode_logger.email_logger'] = $instance = new \Monolog\Logger('nordcode_email_logger');
        $instance->pushHandler($this->get('nordcode_logger.email_log_handler'));
        return $instance;
    }
    protected function getNordcodeNotification_Admin_NoticeService()
    {
        $instance = new \Nordcode\NotificationBundle\Admin\NoticeAdmin('nordcode_notification.admin.notice', 'Nordcode\\NotificationBundle\\Entity\\Notice', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('NordcodeNotificationBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('notice');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeNotification_NoticeManagerService()
    {
        return $this->services['nordcode_notification.notice_manager'] = new \Nordcode\NotificationBundle\Entity\NoticeManager($this);
    }
    protected function getNordcodePaymentSkrill_Form_SkrillTypeService()
    {
        return $this->services['nordcode_payment_skrill.form.skrill_type'] = new \Nordcode\PaymentSkrillBundle\Form\SkrillType();
    }
    protected function getNordcodePaymentSkrill_GatewayService()
    {
        $this->services['nordcode_payment_skrill.gateway'] = $instance = new \Nordcode\PaymentSkrillBundle\Gateway\Gateway(NULL, $this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router'));
        $instance->setScalarParameters(array('email' => 'kimskrillbusiness@wuestkamp.com', 'password' => '123Lolchen', 'secretWord' => 123456, 'recipientDescription' => 'SwitchFit Course', 'returnUrlText' => 'Return to SwitchFit', 'returnUrlTarget' => 3, 'cancelUrlTarget' => 3));
        $instance->setRouteParameters(array('returnUrl' => 'switchfit_signup_payment_success', 'cancelUrl' => 'switchfit_signup_payment_cancel', 'notifyUrl' => 'switchfit_signup_payment_notify'));
        return $instance;
    }
    protected function getNordcodePaymentSkrill_LogHandlerService()
    {
        return $this->services['nordcode_payment_skrill.log_handler'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[4].'/logs/sf/switchfit/prod.payment.log'), 200);
    }
    protected function getNordcodePaymentSkrill_LoggerService()
    {
        $this->services['nordcode_payment_skrill.logger'] = $instance = new \Monolog\Logger('nordcode_payment_skrill');
        $instance->pushHandler($this->get('nordcode_payment_skrill.log_handler'));
        return $instance;
    }
    protected function getNordcodePaymentSkrill_PluginService()
    {
        $this->services['nordcode_payment_skrill.plugin'] = $instance = new \Nordcode\PaymentSkrillBundle\Plugin\SkrillPlugin($this->get('nordcode_payment_skrill.gateway'), $this->get('nordcode_payment_skrill.status_callback'));
        $instance->setLogger($this->get('nordcode_payment_skrill.logger'));
        return $instance;
    }
    protected function getNordcodePaymentSkrill_StatusCallbackService()
    {
        return $this->services['nordcode_payment_skrill.status_callback'] = new \Nordcode\PaymentSkrillBundle\Util\StatusCallback($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE), 'switchfit_signup_payment_success', 'switchfit_signup_payment_notify', 'switchfit_signup_payment_cancel');
    }
    protected function getNordcodePoint_ActivityManagerService()
    {
        return $this->services['nordcode_point.activity_manager'] = new \Nordcode\PointBundle\Entity\Manager\ActivityManager($this->get('doctrine.orm.switchfit_entity_manager'), $this->get('nordcode_point.point_manager'));
    }
    protected function getNordcodePoint_PointManagerService()
    {
        return $this->services['nordcode_point.point_manager'] = new \Nordcode\PointBundle\Entity\Manager\PointManager($this->get('doctrine.orm.switchfit_entity_manager'));
    }
    protected function getNordcodeQa_Admin_AnswerService()
    {
        $instance = new \Nordcode\QABundle\Admin\AnswerAdmin('nordcode_qa.admin.answer', 'Nordcode\\QABundle\\Entity\\Answer', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('NordcodeQABundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('answer');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeQa_Admin_CategoryService()
    {
        $instance = new \Nordcode\QABundle\Admin\CategoryAdmin('nordcode_qa.admin.category', 'Nordcode\\QABundle\\Entity\\Category', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('NordcodeQABundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('category');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeQa_Admin_QuestionService()
    {
        $instance = new \Nordcode\QABundle\Admin\QuestionAdmin('nordcode_qa.admin.question', 'Nordcode\\QABundle\\Entity\\Question', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('NordcodeQABundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('question');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeQa_Admin_VoteService()
    {
        $instance = new \Nordcode\QABundle\Admin\VoteAdmin('nordcode_qa.admin.vote', 'Nordcode\\QABundle\\Entity\\Vote', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('NordcodeQABundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('vote');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeQa_ManagerService()
    {
        return $this->services['nordcode_qa.manager'] = new \Nordcode\QABundle\Entity\Manager\QAManager($this->get('doctrine.orm.switchfit_entity_manager'));
    }
    protected function getNordcodeQuest_Admin_QuestService()
    {
        $instance = new \Nordcode\QuestBundle\Admin\QuestAdmin('nordcode_quest.admin.quest', 'Nordcode\\QuestBundle\\Entity\\Quest', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('QuestBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('quests');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeQuest_Admin_QuestCategoryService()
    {
        $instance = new \Nordcode\QuestBundle\Admin\QuestCategoryAdmin('nordcode_quest.admin.quest_category', 'Nordcode\\QuestBundle\\Entity\\QuestCategory', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('QuestBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('category');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeQuest_Admin_QuestPhotoService()
    {
        $instance = new \Nordcode\QuestBundle\Admin\QuestPhotoAdmin('nordcode_quest.admin.quest_photo', 'Nordcode\\QuestBundle\\Entity\\QuestPhoto', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('QuestBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('quest photo');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeQuest_QuestManagerService()
    {
        return $this->services['nordcode_quest.quest_manager'] = new \Nordcode\QuestBundle\Entity\Manager\QuestManager($this->get('doctrine.orm.switchfit_entity_manager'), $this->get('nordcode_point.activity_manager'), $this->get('nordcode_core.course_manager'));
    }
    protected function getNordcodeRest_AssocCollectionHandlerService()
    {
        return $this->services['nordcode_rest.assoc_collection_handler'] = new \Nordcode\RestBundle\Serializer\Handler\AssocCollectionHandler();
    }
    protected function getNordcodeRest_FormHandlerService()
    {
        return $this->services['nordcode_rest.form_handler'] = new \Nordcode\RestBundle\Serializer\Handler\FormHandler($this->get('translator.default'));
    }
    protected function getNordcodeRest_IdenticalPropertyNamingStrategyService()
    {
        return $this->services['nordcode_rest.identical_property_naming_strategy'] = new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy(new \JMS\Serializer\Naming\CacheNamingStrategy(new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true))));
    }
    protected function getNordcodeSwitchfit_AccessDeniedExceptionListenerService()
    {
        return $this->services['nordcode_switchfit.access_denied_exception_listener'] = new \Nordcode\SwitchfitBundle\EventListener\AccessDeniedHttpExceptionListener($this->get('router'), $this->get('security.context'));
    }
    protected function getNordcodeSwitchfit_Admin_BodyTypeService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\BodyTypeAdmin('nordcode_switchfit.admin.body_type', 'Nordcode\\CoreBundle\\Entity\\BodyType', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('body_type');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_ContactMessageService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\ContactMessageAdmin('nordcode_switchfit.admin.contact_message', 'Nordcode\\CoreBundle\\Entity\\ContactMessage', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('contact_message');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_ContentService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\ContentAdmin('nordcode_switchfit.admin.content', 'Nordcode\\CoreBundle\\Entity\\Content', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('content');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_CourseService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\CourseAdmin('nordcode_switchfit.admin.course', 'Nordcode\\CoreBundle\\Entity\\Course', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('course');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_CoursePriceService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\CoursePriceAdmin('nordcode_switchfit.admin.course_price', 'Nordcode\\CoreBundle\\Entity\\CoursePrice', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('course_price');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_CoursePromoCodeService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\CoursePromoCodeAdmin('nordcode_switchfit.admin.course_promo_code', 'Nordcode\\CoreBundle\\Entity\\CoursePromoCode', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('course_promo_code');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_DiaryService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\DiaryAdmin('nordcode_switchfit.admin.diary', 'Nordcode\\CoreBundle\\Entity\\Diary', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('diary');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_DiaryEntryService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\DiaryEntryAdmin('nordcode_switchfit.admin.diary_entry', 'Nordcode\\CoreBundle\\Entity\\DiaryEntry', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('diary_entry');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_DiaryEntryCommentService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\DiaryEntryCommentAdmin('nordcode_switchfit.admin.diary_entry_comment', 'Nordcode\\CoreBundle\\Entity\\DiaryEntryComment', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('diary_entry_comment');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_DiaryEntryVoteService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\DiaryEntryVoteAdmin('nordcode_switchfit.admin.diary_entry_vote', 'Nordcode\\CoreBundle\\Entity\\DiaryEntryVote', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('diary_entry_vote');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_MealService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\MealAdmin('nordcode_switchfit.admin.meal', 'Nordcode\\CoreBundle\\Entity\\Meal', 'SonataAdminBundle:CRUD', $this->get('snc_redis.phpredis.cache'));
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('meal');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_MealCategoryService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\MealCategoryAdmin('nordcode_switchfit.admin.meal_category', 'Nordcode\\CoreBundle\\Entity\\MealCategory', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('meal_category');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_MealFavoriteService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\MealFavoriteAdmin('nordcode_switchfit.admin.meal_favorite', 'Nordcode\\CoreBundle\\Entity\\MealFavorite', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('meal_favorite');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_MealPhotoService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\MealPhotoAdmin('nordcode_switchfit.admin.meal_photo', 'Nordcode\\CoreBundle\\Entity\\MealPhoto', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('meal_photo');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_MealTypeService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\MealTypeAdmin('nordcode_switchfit.admin.meal_type', 'Nordcode\\CoreBundle\\Entity\\MealType', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('meal_type');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_PaymentService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\PaymentAdmin('nordcode_switchfit.admin.payment', 'JMS\\Payment\\CoreBundle\\Entity\\Payment', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('payment');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_PaymentInstructionService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\PaymentInstructionAdmin('nordcode_switchfit.admin.payment_instruction', 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('payment_instruction');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_ProductService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\ProductAdmin('nordcode_switchfit.admin.product', 'Nordcode\\CoreBundle\\Entity\\Product', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('product');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_SfLifeHeaderService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\SFLifeHeaderAdmin('nordcode_switchfit.admin.sf_life_header', 'Nordcode\\CoreBundle\\Entity\\SFLifeHeader', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('sf_life_header');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_SfLifeVideoService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\SFLifeVideoAdmin('nordcode_switchfit.admin.sf_life_video', 'Nordcode\\CoreBundle\\Entity\\SFLifeVideo', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('sf_life_video');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_SuggestDayService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\SuggestDayAdmin('nordcode_switchfit.admin.suggest_day', 'Nordcode\\CoreBundle\\Entity\\SuggestDay', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('suggest_day');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_SuggestDayItemService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\SuggestDayItemAdmin('nordcode_switchfit.admin.suggest_day_item', 'Nordcode\\CoreBundle\\Entity\\SuggestDayItem', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('suggest_day_item');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_SuggestTemplateService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\SuggestTemplateAdmin('nordcode_switchfit.admin.suggest_template', 'Nordcode\\CoreBundle\\Entity\\SuggestTemplate', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('suggest_template');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_SuggestTemplateHasDayService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\SuggestTemplateHasDayAdmin('nordcode_switchfit.admin.suggest_template_has_day', 'Nordcode\\CoreBundle\\Entity\\SuggestTemplateHasDay', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('suggest_template_has_day');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_TimetableItemService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\TimetableItemAdmin('nordcode_switchfit.admin.timetable_item', 'Nordcode\\CoreBundle\\Entity\\TimetableItem', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('timetable_item');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_TransactionService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\FinancialTransactionAdmin('nordcode_switchfit.admin.transaction', 'JMS\\Payment\\CoreBundle\\Entity\\FinancialTransaction', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('transaction');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_UserCourseService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\UserCourseAdmin('nordcode_switchfit.admin.user_course', 'Nordcode\\CoreBundle\\Entity\\UserCourse', 'NordcodeSwitchfitBundle:Admin\\UserCourse');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('user_course');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_UserCourseDayService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\UserCourseDayAdmin('nordcode_switchfit.admin.user_course_day', 'Nordcode\\CoreBundle\\Entity\\UserCourseDay', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('user_course_day');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_UserCourseWarmupService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\UserCourseWarmupAdmin('nordcode_switchfit.admin.user_course_warmup', 'Nordcode\\CoreBundle\\Entity\\UserCourseWarmup', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('user_course_warmup');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_UserCourseWeekService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\UserCourseWeekAdmin('nordcode_switchfit.admin.user_course_week', 'Nordcode\\CoreBundle\\Entity\\UserCourseWeek', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('user_course_week');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_WarmupTaskService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\WarmupTaskAdmin('nordcode_switchfit.admin.warmup_task', 'Nordcode\\CoreBundle\\Entity\\WarmupTask', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('warmup_task');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_WorkoutService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\WorkoutAdmin('nordcode_switchfit.admin.workout', 'Nordcode\\CoreBundle\\Entity\\Workout', 'SonataAdminBundle:CRUD', $this->get('snc_redis.phpredis.cache'));
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('workout');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_WorkoutCategoryService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\WorkoutCategoryAdmin('nordcode_switchfit.admin.workout_category', 'Nordcode\\CoreBundle\\Entity\\WorkoutCategory', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('workout_category');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_WorkoutDayofcourseService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\WorkoutDayOfCourseAdmin('nordcode_switchfit.admin.workout_dayofcourse', 'Nordcode\\CoreBundle\\Entity\\WorkoutDayOfCourse', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('workout_dayofcourse');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_WorkoutFavoriteService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\WorkoutFavoriteAdmin('nordcode_switchfit.admin.workout_favorite', 'Nordcode\\CoreBundle\\Entity\\WorkoutFavorite', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('workout_favorite');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_WorkoutLocationService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\WorkoutLocationAdmin('nordcode_switchfit.admin.workout_location', 'Nordcode\\CoreBundle\\Entity\\WorkoutLocation', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('workout_location');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_WorkoutPhotoService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\WorkoutPhotoAdmin('nordcode_switchfit.admin.workout_photo', 'Nordcode\\CoreBundle\\Entity\\WorkoutPhoto', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('workout_photo');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeSwitchfit_Admin_WorkoutTypeService()
    {
        $instance = new \Nordcode\SwitchfitBundle\Admin\WorkoutTypeAdmin('nordcode_switchfit.admin.workout_type', 'Nordcode\\CoreBundle\\Entity\\WorkoutType', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SwitchfitBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('workout_type');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeTipps_Admin_TippService()
    {
        $instance = new \Nordcode\TippsBundle\Admin\TippsAdmin('nordcode_tipps.admin.tipp', 'Nordcode\\TippsBundle\\Entity\\Tipp', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('TippsBundle');
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.native'));
        $instance->setLabel('tipps');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getNordcodeTipps_TippsManagerService()
    {
        return $this->services['nordcode_tipps.tipps_manager'] = new \Nordcode\TippsBundle\Entity\Manager\TippsManager($this->get('doctrine.orm.switchfit_entity_manager'));
    }
    protected function getNordcodeTranslation_Form_TranslatableFieldService()
    {
        return $this->services['nordcode_translation.form.translatable_field'] = new \Nordcode\TranslationBundle\Form\Type\TranslatedFieldType($this->get('doctrine.orm.switchfit_entity_manager'));
    }
    protected function getNordcodeTranslation_Listener_TranslatableService()
    {
        $this->services['nordcode_translation.listener.translatable'] = $instance = new \Nordcode\TranslationBundle\EventListener\TranslatableListener();
        $instance->setAnnotationReader($this->get('annotation_reader'));
        $instance->setDefaultLocale('de');
        $instance->setTranslationFallback(true);
        return $instance;
    }
    protected function getNordcodeUploader_City_Adapter_Filesystem_LocalService()
    {
        return $this->services['nordcode_uploader.city.adapter.filesystem.local'] = new \Nordcode\UploaderBundle\Adapter\Local(($this->targetDirs[4].'/media/images/ref/city'), true);
    }
    protected function getNordcodeUploader_Diary_Adapter_Filesystem_LocalService()
    {
        return $this->services['nordcode_uploader.diary.adapter.filesystem.local'] = new \Nordcode\UploaderBundle\Adapter\Local(($this->targetDirs[4].'/media/images/ref/diary'), true);
    }
    protected function getNordcodeUploader_Form_SonataUploaderFileService()
    {
        return $this->services['nordcode_uploader.form.sonata_uploader_file'] = new \Nordcode\UploaderBundle\Form\Type\SonataFileType($this->get('nordcode_uploader.templating.helper.uploader_helper'), $this->get('doctrine.orm.switchfit_entity_manager'));
    }
    protected function getNordcodeUploader_Form_UploaderFileService()
    {
        return $this->services['nordcode_uploader.form.uploader_file'] = new \Nordcode\UploaderBundle\Form\Type\FileType($this->get('nordcode_uploader.templating.helper.uploader_helper'), $this->get('doctrine.orm.switchfit_entity_manager'));
    }
    protected function getNordcodeUploader_Listener_SerializationListenerService()
    {
        return $this->services['nordcode_uploader.listener.serialization_listener'] = new \Nordcode\UploaderBundle\EventListener\SerializationListener($this->get('nordcode_uploader.templating.helper.uploader_helper'));
    }
    protected function getNordcodeUploader_Meal_Adapter_Filesystem_LocalService()
    {
        return $this->services['nordcode_uploader.meal.adapter.filesystem.local'] = new \Nordcode\UploaderBundle\Adapter\Local(($this->targetDirs[4].'/media/images/ref/meal'), true);
    }
    protected function getNordcodeUploader_NamerUniqidService()
    {
        return $this->services['nordcode_uploader.namer_uniqid'] = new \Nordcode\UploaderBundle\Namer\UniqidNamer();
    }
    protected function getNordcodeUploader_Quest_Adapter_Filesystem_LocalService()
    {
        return $this->services['nordcode_uploader.quest.adapter.filesystem.local'] = new \Nordcode\UploaderBundle\Adapter\Local(($this->targetDirs[4].'/media/images/ref/quest'), true);
    }
    protected function getNordcodeUploader_SfLife_Adapter_Filesystem_LocalService()
    {
        return $this->services['nordcode_uploader.sf_life.adapter.filesystem.local'] = new \Nordcode\UploaderBundle\Adapter\Local(($this->targetDirs[4].'/media/images/ref/sflife'), true);
    }
    protected function getNordcodeUploader_Storage_GaufretteService()
    {
        return $this->services['nordcode_uploader.storage.gaufrette'] = new \Nordcode\UploaderBundle\Storage\GaufretteStorage($this->get('vich_uploader.property_mapping_factory'), $this->get('knp_gaufrette.filesystem_map'));
    }
    protected function getNordcodeUploader_Templating_Helper_UploaderHelperService()
    {
        return $this->services['nordcode_uploader.templating.helper.uploader_helper'] = new \Nordcode\UploaderBundle\Templating\Helper\UploaderHelper($this->get('nordcode_uploader.storage.gaufrette'));
    }
    protected function getNordcodeUploader_User_Adapter_Filesystem_LocalService()
    {
        return $this->services['nordcode_uploader.user.adapter.filesystem.local'] = new \Nordcode\UploaderBundle\Adapter\Local(($this->targetDirs[4].'/media/images/ref/user'), true);
    }
    protected function getNordcodeUploader_Workout_Adapter_Filesystem_LocalService()
    {
        return $this->services['nordcode_uploader.workout.adapter.filesystem.local'] = new \Nordcode\UploaderBundle\Adapter\Local(($this->targetDirs[4].'/media/images/ref/workout'), true);
    }
    protected function getNordcodeUser_Admin_Block_DiaryEntriesService()
    {
        return $this->services['nordcode_user.admin.block.diary_entries'] = new \Nordcode\AdminBundle\Block\UserDiaryBlockService('nordcode_user.admin.block.diary_entries', $this->get('templating'), $this->get('nordcode_core.diary_manager'));
    }
    protected function getNordcodeUser_Admin_Block_MealFavoriteService()
    {
        return $this->services['nordcode_user.admin.block.meal_favorite'] = new \Nordcode\AdminBundle\Block\UserMealFavoriteBlockService('nordcode_user.admin.block.meal_favorite', $this->get('templating'), $this->get('nordcode_core.meal_manager'));
    }
    protected function getNordcodeUser_Admin_Block_UserAcademyService()
    {
        return $this->services['nordcode_user.admin.block.user_academy'] = new \Nordcode\AdminBundle\Block\UserAcademyBlockService('nordcode_user.admin.block.user_academy', $this->get('templating'), $this->get('nordcode_core.course_manager'), $this->get('nordcode_academy.academy_manager'));
    }
    protected function getNordcodeUser_Admin_Block_UserCourseService()
    {
        return $this->services['nordcode_user.admin.block.user_course'] = new \Nordcode\AdminBundle\Block\UserCourseBlockService('nordcode_user.admin.block.user_course', $this->get('templating'), $this->get('nordcode_core.course_manager'));
    }
    protected function getNordcodeUser_Admin_Block_UserCourseHealthService()
    {
        return $this->services['nordcode_user.admin.block.user_course_health'] = new \Nordcode\AdminBundle\Block\UserCourseHealthBlockService('nordcode_user.admin.block.user_course_health', $this->get('templating'), $this->get('nordcode_core.course_manager'));
    }
    protected function getNordcodeUser_Admin_Block_UserCourseWeeklyService()
    {
        return $this->services['nordcode_user.admin.block.user_course_weekly'] = new \Nordcode\AdminBundle\Block\UserCourseWeeklyBlockService('nordcode_user.admin.block.user_course_weekly', $this->get('templating'), $this->get('nordcode_core.course_manager'));
    }
    protected function getNordcodeUser_Admin_Block_UserMainDataService()
    {
        return $this->services['nordcode_user.admin.block.user_main_data'] = new \Nordcode\AdminBundle\Block\UserMainDataBlockService('nordcode_user.admin.block.user_main_data', $this->get('templating'), $this->get('nordcode_user.user_manager'));
    }
    protected function getNordcodeUser_Admin_Block_WorkoutFavoriteService()
    {
        return $this->services['nordcode_user.admin.block.workout_favorite'] = new \Nordcode\AdminBundle\Block\UserWorkoutFavoriteBlockService('nordcode_user.admin.block.workout_favorite', $this->get('templating'), $this->get('nordcode_core.workout_manager'));
    }
    protected function getNordcodeUser_MailerRealService()
    {
        return $this->services['nordcode_user.mailer_real'] = new \Nordcode\UserBundle\Mailer\Mailer($this->get('nordcode_user.mailer_real_instance'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'NordcodeUserBundle:Landing/Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('team@switchfit.io' => 'SwitchFit'), 'resetting' => array('team@switchfit.io' => 'SwitchFit'), 'welcome' => 'team@switchfit.io')));
    }
    protected function getNordcodeUser_MailerRealInstanceService()
    {
        return $this->services['nordcode_user.mailer_real_instance'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport.real'));
    }
    protected function getNordcodeUser_MailerSpoolService()
    {
        return $this->services['nordcode_user.mailer_spool'] = new \Nordcode\UserBundle\Mailer\MailerSpool($this->get('nordcode_user.mailer_real_instance'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'NordcodeUserBundle:Landing/Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('team@switchfit.io' => 'SwitchFit'), 'resetting' => array('team@switchfit.io' => 'SwitchFit'), 'welcome' => 'team@switchfit.io')), $this->get('swiftmailer.mailer.default.spool.service'));
    }
    protected function getNordcodeUser_OauthFosUserProviderService()
    {
        return $this->services['nordcode_user.oauth_fos_user_provider'] = new \Nordcode\UserBundle\Security\Core\User\OAuthFOSUserProvider($this->get('nordcode_user.user_manager'), array('facebook' => 'facebookId', 'vkontakte' => 'vkontakteId'));
    }
    protected function getNordcodeUser_RegistrationFormHandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('nordcode_user.registration_form_handler', 'request');
        }
        return $this->services['nordcode_user.registration_form_handler'] = $this->scopedServices['request']['nordcode_user.registration_form_handler'] = new \Nordcode\UserBundle\Form\Landing\Handler\RegistrationFormHandler($this->get('fos_user.registration.form'), $this->get('request'), $this->get('nordcode_user.user_manager'), $this->get('fos_user.util.token_generator'));
    }
    protected function getNordcodeUser_RegistrationFormTypeService()
    {
        return $this->services['nordcode_user.registration_form_type'] = new \Nordcode\UserBundle\Form\Landing\Type\RegistrationFormType($this->get('security.context'));
    }
    protected function getNordcodeUser_RegistrationSignBFormHandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('nordcode_user.registration_sign_b_form_handler', 'request');
        }
        return $this->services['nordcode_user.registration_sign_b_form_handler'] = $this->scopedServices['request']['nordcode_user.registration_sign_b_form_handler'] = new \Nordcode\UserBundle\Form\Switchfit\Handler\RegistrationFormHandler($this->get('fos_user.registration.form'), $this->get('request'), $this->get('nordcode_user.user_manager'));
    }
    protected function getNordcodeUser_RegistrationSignBFormTypeService()
    {
        return $this->services['nordcode_user.registration_sign_b_form_type'] = new \Nordcode\UserBundle\Form\Switchfit\Type\RegistrationFormType('Nordcode\\UserBundle\\Entity\\User', $this->get('doctrine.orm.switchfit_entity_manager'));
    }
    protected function getNordcodeUser_Security_AuthenticationHandlerService()
    {
        return $this->services['nordcode_user.security.authentication_handler'] = new \Nordcode\UserBundle\Security\AuthenticationHandler($this->get('router'), $this->get('security.context'));
    }
    protected function getNordcodeUser_Security_LogoutHandlerService()
    {
        return $this->services['nordcode_user.security.logout_handler'] = new \Nordcode\UserBundle\Security\LogoutHandler($this->get('router'), $this->get('security.context'), $this->get('nordcode_quest.quest_manager'));
    }
    protected function getNordcodeUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');
        return $this->services['nordcode_user.user_manager'] = new \Nordcode\UserBundle\Entity\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('fos_user.entity_manager'), 'Nordcode\\UserBundle\\Entity\\User', $this->get('nordcode_core.course_manager'));
    }
    protected function getPayment_EncryptionServiceService()
    {
        return $this->services['payment.encryption_service'] = new \JMS\Payment\CoreBundle\Cryptography\MCryptEncryptionService('SWITCHFITPAYMENT2014', 'rijndael-256', 'ctr');
    }
    protected function getPayment_Form_ChoosePaymentMethodTypeService()
    {
        return $this->services['payment.form.choose_payment_method_type'] = new \JMS\Payment\CoreBundle\Form\ChoosePaymentMethodType($this->get('payment.plugin_controller'), array(0 => 'skrill'));
    }
    protected function getPayment_PluginControllerService()
    {
        $this->services['payment.plugin_controller'] = $instance = new \JMS\Payment\CoreBundle\PluginController\EntityPluginController($this->get('doctrine.orm.switchfit_entity_manager'), array('result_class' => 'JMS\\Payment\\CoreBundle\\PluginController\\Result', 'payment_instruction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction', 'payment_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Payment', 'financial_transaction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\FinancialTransaction', 'credit_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Credit'), $this->get('event_dispatcher'));
        $instance->addPlugin($this->get('nordcode_payment_skrill.plugin'));
        return $instance;
    }
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor();
    }
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }
        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[4].'/repo/branch/app/switchfit/config/routing.yml'), array('cache_dir' => __DIR__, 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'switchfitProdUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'switchfitProdUrlMatcher', 'strict_requirements' => false), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getRouterListenerService()
    {
        $this->services['router_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = new \Symfony\Component\Config\Loader\LoaderResolver();
        $b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $b->addLoader($this->get('fos_rest.routing.loader.controller'));
        $b->addLoader($this->get('fos_rest.routing.loader.yaml_collection'));
        $b->addLoader($this->get('fos_rest.routing.loader.xml_collection'));
        $b->addLoader($this->get('sonata.admin.route_loader'));
        $b->addLoader($this->get('nordcode_admin_page_board.routes_loader'));
        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $b);
    }
    protected function getRsQueue_ConsumerService()
    {
        return $this->services['rs_queue.consumer'] = new \Mmoreram\RSQueueBundle\Services\Consumer($this->get('event_dispatcher'), $this->get('rs_queue.redis'), $this->get('rs_queue.resolver.queuealias'), $this->get('rs_queue.serializer'));
    }
    protected function getRsQueue_DataCollectorService()
    {
        return $this->services['rs_queue.data_collector'] = new \Mmoreram\RSQueueBundle\Collector\RSQueueCollector();
    }
    protected function getRsQueue_ProducerService()
    {
        return $this->services['rs_queue.producer'] = new \Mmoreram\RSQueueBundle\Services\Producer($this->get('event_dispatcher'), $this->get('rs_queue.redis'), $this->get('rs_queue.resolver.queuealias'), $this->get('rs_queue.serializer'));
    }
    protected function getRsQueue_PublisherService()
    {
        return $this->services['rs_queue.publisher'] = new \Mmoreram\RSQueueBundle\Services\Publisher($this->get('event_dispatcher'), $this->get('rs_queue.redis'), $this->get('rs_queue.resolver.queuealias'), $this->get('rs_queue.serializer'));
    }
    protected function getRsQueue_RedisService()
    {
        return $this->services['rs_queue.redis'] = $this->get('rs_queue.redis.factory')->get();
    }
    protected function getRsQueue_Redis_FactoryService()
    {
        return $this->services['rs_queue.redis.factory'] = new \Mmoreram\RSQueueBundle\Factory\RedisFactory(array('host' => 'localhost', 'port' => 6379, 'database' => 8));
    }
    protected function getRsQueue_Resolver_QueuealiasService()
    {
        return $this->services['rs_queue.resolver.queuealias'] = new \Mmoreram\RSQueueBundle\Resolver\QueueAliasResolver(array('suggest' => 'queues:suggest', 'notices' => 'queues:notices', 'inspire' => 'queues:inspire'));
    }
    protected function getRsQueue_SerializerService()
    {
        return $this->services['rs_queue.serializer'] = $this->get('rs_queue.serializer.factory')->get();
    }
    protected function getRsQueue_Serializer_FactoryService()
    {
        return $this->services['rs_queue.serializer.factory'] = new \Mmoreram\RSQueueBundle\Factory\SerializerFactory('Mmoreram\\RSQueueBundle\\Serializer\\JsonSerializer');
    }
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 1))));
    }
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js|assets)/'), 'security.firewall.map.context.admin' => new \Symfony\Component\HttpFoundation\RequestMatcher('/admin(.*)'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('event_dispatcher'));
    }
    protected function getSecurity_Firewall_Map_Context_AdminService()
    {
        $a = $this->get('security.context');
        $b = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $c = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('security.http_utils');
        $e = $this->get('http_kernel');
        $f = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $d, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($d, '/admin/login'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/admin/logout'));
        $f->addHandler($this->get('security.logout.handler.session'));
        $g = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($d, array('default_target_path' => '/admin/dashboard', 'always_use_default_target_path' => true, 'login_path' => '/admin/login', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $g->setProviderKey('admin');
        return $this->services['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('fos_user.user_provider.username_email')), 'user', $b, $c), 2 => $f, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $this->get('security.authentication.manager'), $this->get('security.authentication.session_strategy'), $d, 'admin', $g, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $d, array('login_path' => '/admin/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $b), array('use_forward' => false, 'check_path' => '/admin/login_check', 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $b, $c), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '5610443b3af9f', $b), 5 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $d, 'admin', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $d, '/admin/login', false), NULL, NULL, $b));
    }
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.context');
        $b = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $c = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('security.http_utils');
        $e = $this->get('security.authentication.manager');
        $f = $this->get('security.authentication.session_strategy');
        $g = $this->get('nordcode_user.security.authentication_handler');
        $h = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $d, $this->get('nordcode_user.security.logout_handler'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/logout'));
        $h->addHandler($this->get('security.logout.handler.session'));
        $i = new \HWI\Bundle\OAuthBundle\Security\Http\Firewall\OAuthListener($a, $e, $f, $d, 'main', $g, $g, array('use_forward' => false, 'check_path' => '/login_check', 'require_previous_session' => true), $b, $c);
        $i->setResourceOwnerMap($this->get('hwi_oauth.resource_ownermap.main'));
        $i->setCheckPaths(array(0 => '/connect/check-facebook'));
        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('fos_user.user_provider.username_email')), 'main', $b, $c), 2 => $h, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $e, $f, $d, 'main', $g, $g, array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $b, $c, $this->get('form.csrf_provider')), 4 => $i, 5 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '5610443b3af9f', $b), 6 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $d, 'main', new \HWI\Bundle\OAuthBundle\Security\Http\EntryPoint\OAuthEntryPoint($this->get('http_kernel'), $d, '/connect', false), NULL, NULL, $b));
    }
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom((__DIR__.'/secure_random.seed'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'));
    }
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('name' => 'switchfit_sessid', 'cookie_domain' => '.switchfit.lo'), $this->get('snc_redis.session.handler'));
    }
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('snc_redis.session.handler'));
    }
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }
    protected function getSncRedis_LoggerService()
    {
        return $this->services['snc_redis.logger'] = new \Snc\RedisBundle\Logger\RedisLogger($this->get('monolog.logger.snc_redis', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSncRedis_Phpredis_CacheService()
    {
        $this->services['snc_redis.phpredis.cache'] = $instance = new \Redis();
        $instance->connect('localhost', 6379, 5);
        $instance->select(5);
        return $instance;
    }
    protected function getSncRedis_Phpredis_MailerSpoolService()
    {
        $this->services['snc_redis.phpredis.mailer_spool'] = $instance = new \Redis();
        $instance->connect('localhost', 6379, 5);
        $instance->select(7);
        return $instance;
    }
    protected function getSncRedis_Phpredis_SessionService()
    {
        $this->services['snc_redis.phpredis.session'] = $instance = new \Redis();
        $instance->connect('localhost', 6379, 5);
        $instance->select(6);
        return $instance;
    }
    protected function getSncRedis_Session_HandlerService()
    {
        return $this->services['snc_redis.session.handler'] = new \Snc\RedisBundle\Session\Storage\Handler\RedisSessionHandler($this->get('snc_redis.phpredis.session'), array('name' => 'switchfit_sessid', 'cookie_domain' => '.switchfit.lo'), 'switchfit', true, 150000);
    }
    protected function getSonata_Admin_Audit_ManagerService()
    {
        return $this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this);
    }
    protected function getSonata_Admin_Block_AdminListService()
    {
        return $this->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService('sonata.admin.block.admin_list', $this->get('templating'), $this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Block_SearchResultService()
    {
        return $this->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService('sonata.admin.block.search_result', $this->get('templating'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.search.handler'));
    }
    protected function getSonata_Admin_Builder_Filter_FactoryService()
    {
        return $this->services['sonata.admin.builder.filter.factory'] = new \Sonata\AdminBundle\Filter\FilterFactory($this, array('doctrine_orm_istring' => 'sonata.admin.orm.filter.type.insensitive_string', 'doctrine_orm_boolean' => 'sonata.admin.orm.filter.type.boolean', 'doctrine_orm_callback' => 'sonata.admin.orm.filter.type.callback', 'doctrine_orm_choice' => 'sonata.admin.orm.filter.type.choice', 'doctrine_orm_model' => 'sonata.admin.orm.filter.type.model', 'doctrine_orm_string' => 'sonata.admin.orm.filter.type.string', 'doctrine_orm_number' => 'sonata.admin.orm.filter.type.number', 'doctrine_orm_date' => 'sonata.admin.orm.filter.type.date', 'doctrine_orm_date_range' => 'sonata.admin.orm.filter.type.date_range', 'doctrine_orm_datetime' => 'sonata.admin.orm.filter.type.datetime', 'doctrine_orm_time' => 'sonata.admin.orm.filter.type.time', 'doctrine_orm_datetime_range' => 'sonata.admin.orm.filter.type.datetime_range', 'doctrine_orm_class' => 'sonata.admin.orm.filter.type.class'));
    }
    protected function getSonata_Admin_Builder_OrmDatagridService()
    {
        return $this->services['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder($this->get('form.factory'), $this->get('sonata.admin.builder.filter.factory'), $this->get('sonata.admin.guesser.orm_datagrid_chain'), true);
    }
    protected function getSonata_Admin_Builder_OrmFormService()
    {
        return $this->services['sonata.admin.builder.orm_form'] = new \Sonata\DoctrineORMAdminBundle\Builder\FormContractor($this->get('form.factory'));
    }
    protected function getSonata_Admin_Builder_OrmListService()
    {
        return $this->services['sonata.admin.builder.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder($this->get('sonata.admin.guesser.orm_list_chain'), array('array' => 'SonataAdminBundle:CRUD:list_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:list_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:list_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'email' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig', 'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:list_url.html.twig'));
    }
    protected function getSonata_Admin_Builder_OrmShowService()
    {
        return $this->services['sonata.admin.builder.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder($this->get('sonata.admin.guesser.orm_show_chain'), array('array' => 'SonataAdminBundle:CRUD:show_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:show_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:show_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'currency' => 'SonataAdminBundle:CRUD:base_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:base_percent.html.twig', 'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig', 'url' => 'SonataAdminBundle:CRUD:show_url.html.twig'));
    }
    protected function getSonata_Admin_Controller_AdminService()
    {
        return $this->services['sonata.admin.controller.admin'] = new \Sonata\AdminBundle\Controller\HelperController($this->get('twig'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.helper'), $this->get('validator'));
    }
    protected function getSonata_Admin_Event_ExtensionService()
    {
        return $this->services['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension($this->get('event_dispatcher'));
    }
    protected function getSonata_Admin_ExporterService()
    {
        return $this->services['sonata.admin.exporter'] = new \Sonata\AdminBundle\Export\Exporter();
    }
    protected function getSonata_Admin_Form_Extension_FieldService()
    {
        return $this->services['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension(array('email' => 'span5', 'textarea' => 'span5', 'text' => 'span5', 'choice' => 'span5', 'integer' => 'span5', 'datetime' => 'sonata-medium-date', 'date' => 'sonata-medium-date'));
    }
    protected function getSonata_Admin_Form_Filter_Type_ChoiceService()
    {
        return $this->services['sonata.admin.form.filter.type.choice'] = new \Sonata\AdminBundle\Form\Type\Filter\ChoiceType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DateService()
    {
        return $this->services['sonata.admin.form.filter.type.date'] = new \Sonata\AdminBundle\Form\Type\Filter\DateType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DaterangeService()
    {
        return $this->services['sonata.admin.form.filter.type.daterange'] = new \Sonata\AdminBundle\Form\Type\Filter\DateRangeType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DatetimeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DatetimeRangeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DefaultService()
    {
        return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
    }
    protected function getSonata_Admin_Form_Filter_Type_NumberService()
    {
        return $this->services['sonata.admin.form.filter.type.number'] = new \Sonata\AdminBundle\Form\Type\Filter\NumberType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Type_AdminService()
    {
        return $this->services['sonata.admin.form.type.admin'] = new \Sonata\AdminBundle\Form\Type\AdminType();
    }
    protected function getSonata_Admin_Form_Type_ModelChoiceService()
    {
        return $this->services['sonata.admin.form.type.model_choice'] = new \Sonata\AdminBundle\Form\Type\ModelType();
    }
    protected function getSonata_Admin_Form_Type_ModelHiddenService()
    {
        return $this->services['sonata.admin.form.type.model_hidden'] = new \Sonata\AdminBundle\Form\Type\ModelHiddenType();
    }
    protected function getSonata_Admin_Form_Type_ModelListService()
    {
        return $this->services['sonata.admin.form.type.model_list'] = new \Sonata\AdminBundle\Form\Type\ModelTypeList();
    }
    protected function getSonata_Admin_Form_Type_ModelReferenceService()
    {
        return $this->services['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }
    protected function getSonata_Admin_Guesser_OrmDatagridService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser();
    }
    protected function getSonata_Admin_Guesser_OrmDatagridChainService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_datagrid')));
    }
    protected function getSonata_Admin_Guesser_OrmListService()
    {
        return $this->services['sonata.admin.guesser.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }
    protected function getSonata_Admin_Guesser_OrmListChainService()
    {
        return $this->services['sonata.admin.guesser.orm_list_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_list')));
    }
    protected function getSonata_Admin_Guesser_OrmShowService()
    {
        return $this->services['sonata.admin.guesser.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }
    protected function getSonata_Admin_Guesser_OrmShowChainService()
    {
        return $this->services['sonata.admin.guesser.orm_show_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_show')));
    }
    protected function getSonata_Admin_HelperService()
    {
        return $this->services['sonata.admin.helper'] = new \Nordcode\AdminBundle\Admin\AdminHelper($this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Label_Strategy_BcService()
    {
        return $this->services['sonata.admin.label.strategy.bc'] = new \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Label_Strategy_FormComponentService()
    {
        return $this->services['sonata.admin.label.strategy.form_component'] = new \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Label_Strategy_NativeService()
    {
        return $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Label_Strategy_NoopService()
    {
        return $this->services['sonata.admin.label.strategy.noop'] = new \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Label_Strategy_UnderscoreService()
    {
        return $this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Manager_OrmService()
    {
        return $this->services['sonata.admin.manager.orm'] = new \Sonata\DoctrineORMAdminBundle\Model\ModelManager($this->get('doctrine'));
    }
    protected function getSonata_Admin_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }
    protected function getSonata_Admin_Manipulator_Acl_Object_OrmService()
    {
        return $this->services['sonata.admin.manipulator.acl.object.orm'] = new \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator();
    }
    protected function getSonata_Admin_Object_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator($this->get('form.factory'), 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_ClassService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_DateService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_DateRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_InsensitiveStringService()
    {
        return new \Nordcode\UserBundle\Filter\CaseInsensitiveStringFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_TimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
    }
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'SwitchFit', '/bundles/nordcodeadmin/img/logo_admin.png', array('html5_validate' => true, 'confirm_exit' => true, 'use_select2' => true, 'pager_links' => NULL));
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig'));
        $instance->setAdminServiceIds(array(0 => 'sonata.user.admin.user', 1 => 'sonata.user.admin.group', 2 => 'nordcode_geo.admin.city', 3 => 'nordcode_geo.admin.country', 4 => 'nordcode_switchfit.admin.payment_instruction', 5 => 'nordcode_switchfit.admin.payment', 6 => 'nordcode_switchfit.admin.transaction', 7 => 'nordcode_switchfit.admin.course_price', 8 => 'nordcode_switchfit.admin.course_promo_code', 9 => 'nordcode_switchfit.admin.course', 10 => 'nordcode_switchfit.admin.user_course', 11 => 'nordcode_switchfit.admin.user_course_day', 12 => 'nordcode_switchfit.admin.user_course_week', 13 => 'nordcode_switchfit.admin.timetable_item', 14 => 'nordcode_switchfit.admin.warmup_task', 15 => 'nordcode_switchfit.admin.user_course_warmup', 16 => 'nordcode_switchfit.admin.body_type', 17 => 'nordcode_switchfit.admin.meal_category', 18 => 'nordcode_switchfit.admin.meal_type', 19 => 'nordcode_switchfit.admin.meal', 20 => 'nordcode_switchfit.admin.meal_photo', 21 => 'nordcode_switchfit.admin.meal_favorite', 22 => 'nordcode_switchfit.admin.product', 23 => 'nordcode_switchfit.admin.workout_category', 24 => 'nordcode_switchfit.admin.workout_type', 25 => 'nordcode_switchfit.admin.workout', 26 => 'nordcode_switchfit.admin.workout_photo', 27 => 'nordcode_switchfit.admin.workout_dayofcourse', 28 => 'nordcode_switchfit.admin.workout_favorite', 29 => 'nordcode_switchfit.admin.workout_location', 30 => 'nordcode_switchfit.admin.contact_message', 31 => 'nordcode_switchfit.admin.suggest_template', 32 => 'nordcode_switchfit.admin.suggest_template_has_day', 33 => 'nordcode_switchfit.admin.suggest_day', 34 => 'nordcode_switchfit.admin.suggest_day_item', 35 => 'nordcode_switchfit.admin.diary', 36 => 'nordcode_switchfit.admin.diary_entry', 37 => 'nordcode_switchfit.admin.diary_entry_comment', 38 => 'nordcode_switchfit.admin.diary_entry_vote', 39 => 'nordcode_switchfit.admin.content', 40 => 'nordcode_switchfit.admin.sf_life_header', 41 => 'nordcode_switchfit.admin.sf_life_video', 42 => 'nordcode_academy.admin.academy', 43 => 'nordcode_academy.admin.academy_has_module', 44 => 'nordcode_academy.admin.module', 45 => 'nordcode_academy.admin.topic', 46 => 'nordcode_academy.admin.question', 47 => 'nordcode_academy.admin.answer', 48 => 'nordcode_notification.admin.notice', 49 => 'nordcode_qa.admin.question', 50 => 'nordcode_qa.admin.answer', 51 => 'nordcode_qa.admin.category', 52 => 'nordcode_qa.admin.vote', 53 => 'nordcode_quest.admin.quest', 54 => 'nordcode_quest.admin.quest_category', 55 => 'nordcode_quest.admin.quest_photo', 56 => 'nordcode_tipps.admin.tipp'));
        $instance->setAdminGroups(array('sonata_user' => array('label' => 'sonata_user', 'label_catalogue' => 'SonataUserBundle', 'roles' => array(), 'items' => array(0 => 'sonata.user.admin.user', 1 => 'sonata.user.admin.group')), 'geo' => array('label' => 'geo', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'nordcode_geo.admin.city', 1 => 'nordcode_geo.admin.country')), 'payment' => array('label' => 'payment', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'nordcode_switchfit.admin.payment_instruction', 1 => 'nordcode_switchfit.admin.payment', 2 => 'nordcode_switchfit.admin.transaction', 3 => 'nordcode_switchfit.admin.course_price', 4 => 'nordcode_switchfit.admin.course_promo_code')), 'courses' => array('label' => 'courses', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'nordcode_switchfit.admin.course', 1 => 'nordcode_switchfit.admin.user_course', 2 => 'nordcode_switchfit.admin.user_course_day', 3 => 'nordcode_switchfit.admin.user_course_week', 4 => 'nordcode_switchfit.admin.warmup_task', 5 => 'nordcode_switchfit.admin.body_type')), 'meal_workout' => array('label' => 'meal_workout', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'nordcode_switchfit.admin.meal_category', 1 => 'nordcode_switchfit.admin.meal_type', 2 => 'nordcode_switchfit.admin.meal', 3 => 'nordcode_switchfit.admin.meal_favorite', 4 => 'nordcode_switchfit.admin.product', 5 => 'nordcode_switchfit.admin.workout_category', 6 => 'nordcode_switchfit.admin.workout_type', 7 => 'nordcode_switchfit.admin.workout', 8 => 'nordcode_switchfit.admin.workout_favorite', 9 => 'nordcode_switchfit.admin.workout_location')), 'messages' => array('label' => 'messages', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'nordcode_switchfit.admin.contact_message', 1 => 'nordcode_notification.admin.notice')), 'suggest' => array('label' => 'suggest', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'nordcode_switchfit.admin.suggest_template', 1 => 'nordcode_switchfit.admin.suggest_day')), 'diary' => array('label' => 'diary', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'nordcode_switchfit.admin.diary', 1 => 'nordcode_switchfit.admin.diary_entry', 2 => 'nordcode_switchfit.admin.diary_entry_comment', 3 => 'nordcode_switchfit.admin.diary_entry_vote')), 'content' => array('label' => 'content', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'nordcode_switchfit.admin.content', 1 => 'nordcode_switchfit.admin.sf_life_header', 2 => 'nordcode_switchfit.admin.sf_life_video')), 'academy' => array('label' => 'academy', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'nordcode_academy.admin.academy', 1 => 'nordcode_academy.admin.module', 2 => 'nordcode_academy.admin.topic', 3 => 'nordcode_academy.admin.question')), 'qa' => array('label' => 'qa', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'nordcode_qa.admin.question', 1 => 'nordcode_qa.admin.answer', 2 => 'nordcode_qa.admin.category', 3 => 'nordcode_qa.admin.vote')), 'quest' => array('label' => 'quest', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'nordcode_quest.admin.quest', 1 => 'nordcode_quest.admin.quest_category')), 'tipps' => array('label' => 'tipps', 'label_catalogue' => 'SonataAdminBundle', 'roles' => array(), 'items' => array(0 => 'nordcode_tipps.admin.tipp'))));
        $instance->setAdminClasses(array('Nordcode\\UserBundle\\Entity\\User' => array(0 => 'sonata.user.admin.user'), 'Nordcode\\UserBundle\\Entity\\Group' => array(0 => 'sonata.user.admin.group'), 'Nordcode\\GeoBundle\\Entity\\City' => array(0 => 'nordcode_geo.admin.city'), 'Nordcode\\GeoBundle\\Entity\\Country' => array(0 => 'nordcode_geo.admin.country'), 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' => array(0 => 'nordcode_switchfit.admin.payment_instruction'), 'JMS\\Payment\\CoreBundle\\Entity\\Payment' => array(0 => 'nordcode_switchfit.admin.payment'), 'JMS\\Payment\\CoreBundle\\Entity\\FinancialTransaction' => array(0 => 'nordcode_switchfit.admin.transaction'), 'Nordcode\\CoreBundle\\Entity\\CoursePrice' => array(0 => 'nordcode_switchfit.admin.course_price'), 'Nordcode\\CoreBundle\\Entity\\CoursePromoCode' => array(0 => 'nordcode_switchfit.admin.course_promo_code'), 'Nordcode\\CoreBundle\\Entity\\Course' => array(0 => 'nordcode_switchfit.admin.course'), 'Nordcode\\CoreBundle\\Entity\\UserCourse' => array(0 => 'nordcode_switchfit.admin.user_course'), 'Nordcode\\CoreBundle\\Entity\\UserCourseDay' => array(0 => 'nordcode_switchfit.admin.user_course_day'), 'Nordcode\\CoreBundle\\Entity\\UserCourseWeek' => array(0 => 'nordcode_switchfit.admin.user_course_week'), 'Nordcode\\CoreBundle\\Entity\\TimetableItem' => array(0 => 'nordcode_switchfit.admin.timetable_item'), 'Nordcode\\CoreBundle\\Entity\\WarmupTask' => array(0 => 'nordcode_switchfit.admin.warmup_task'), 'Nordcode\\CoreBundle\\Entity\\UserCourseWarmup' => array(0 => 'nordcode_switchfit.admin.user_course_warmup'), 'Nordcode\\CoreBundle\\Entity\\BodyType' => array(0 => 'nordcode_switchfit.admin.body_type'), 'Nordcode\\CoreBundle\\Entity\\MealCategory' => array(0 => 'nordcode_switchfit.admin.meal_category'), 'Nordcode\\CoreBundle\\Entity\\MealType' => array(0 => 'nordcode_switchfit.admin.meal_type'), 'Nordcode\\CoreBundle\\Entity\\Meal' => array(0 => 'nordcode_switchfit.admin.meal'), 'Nordcode\\CoreBundle\\Entity\\MealPhoto' => array(0 => 'nordcode_switchfit.admin.meal_photo'), 'Nordcode\\CoreBundle\\Entity\\MealFavorite' => array(0 => 'nordcode_switchfit.admin.meal_favorite'), 'Nordcode\\CoreBundle\\Entity\\Product' => array(0 => 'nordcode_switchfit.admin.product'), 'Nordcode\\CoreBundle\\Entity\\WorkoutCategory' => array(0 => 'nordcode_switchfit.admin.workout_category'), 'Nordcode\\CoreBundle\\Entity\\WorkoutType' => array(0 => 'nordcode_switchfit.admin.workout_type'), 'Nordcode\\CoreBundle\\Entity\\Workout' => array(0 => 'nordcode_switchfit.admin.workout'), 'Nordcode\\CoreBundle\\Entity\\WorkoutPhoto' => array(0 => 'nordcode_switchfit.admin.workout_photo'), 'Nordcode\\CoreBundle\\Entity\\WorkoutDayOfCourse' => array(0 => 'nordcode_switchfit.admin.workout_dayofcourse'), 'Nordcode\\CoreBundle\\Entity\\WorkoutFavorite' => array(0 => 'nordcode_switchfit.admin.workout_favorite'), 'Nordcode\\CoreBundle\\Entity\\WorkoutLocation' => array(0 => 'nordcode_switchfit.admin.workout_location'), 'Nordcode\\CoreBundle\\Entity\\ContactMessage' => array(0 => 'nordcode_switchfit.admin.contact_message'), 'Nordcode\\CoreBundle\\Entity\\SuggestTemplate' => array(0 => 'nordcode_switchfit.admin.suggest_template'), 'Nordcode\\CoreBundle\\Entity\\SuggestTemplateHasDay' => array(0 => 'nordcode_switchfit.admin.suggest_template_has_day'), 'Nordcode\\CoreBundle\\Entity\\SuggestDay' => array(0 => 'nordcode_switchfit.admin.suggest_day'), 'Nordcode\\CoreBundle\\Entity\\SuggestDayItem' => array(0 => 'nordcode_switchfit.admin.suggest_day_item'), 'Nordcode\\CoreBundle\\Entity\\Diary' => array(0 => 'nordcode_switchfit.admin.diary'), 'Nordcode\\CoreBundle\\Entity\\DiaryEntry' => array(0 => 'nordcode_switchfit.admin.diary_entry'), 'Nordcode\\CoreBundle\\Entity\\DiaryEntryComment' => array(0 => 'nordcode_switchfit.admin.diary_entry_comment'), 'Nordcode\\CoreBundle\\Entity\\DiaryEntryVote' => array(0 => 'nordcode_switchfit.admin.diary_entry_vote'), 'Nordcode\\CoreBundle\\Entity\\Content' => array(0 => 'nordcode_switchfit.admin.content'), 'Nordcode\\CoreBundle\\Entity\\SFLifeHeader' => array(0 => 'nordcode_switchfit.admin.sf_life_header'), 'Nordcode\\CoreBundle\\Entity\\SFLifeVideo' => array(0 => 'nordcode_switchfit.admin.sf_life_video'), 'Nordcode\\AcademyBundle\\Entity\\Academy' => array(0 => 'nordcode_academy.admin.academy'), 'Nordcode\\AcademyBundle\\Entity\\AcademyHasModule' => array(0 => 'nordcode_academy.admin.academy_has_module'), 'Nordcode\\AcademyBundle\\Entity\\Module' => array(0 => 'nordcode_academy.admin.module'), 'Nordcode\\AcademyBundle\\Entity\\Topic' => array(0 => 'nordcode_academy.admin.topic'), 'Nordcode\\AcademyBundle\\Entity\\Question' => array(0 => 'nordcode_academy.admin.question'), 'Nordcode\\AcademyBundle\\Entity\\Answer' => array(0 => 'nordcode_academy.admin.answer'), 'Nordcode\\NotificationBundle\\Entity\\Notice' => array(0 => 'nordcode_notification.admin.notice'), 'Nordcode\\QABundle\\Entity\\Question' => array(0 => 'nordcode_qa.admin.question'), 'Nordcode\\QABundle\\Entity\\Answer' => array(0 => 'nordcode_qa.admin.answer'), 'Nordcode\\QABundle\\Entity\\Category' => array(0 => 'nordcode_qa.admin.category'), 'Nordcode\\QABundle\\Entity\\Vote' => array(0 => 'nordcode_qa.admin.vote'), 'Nordcode\\QuestBundle\\Entity\\Quest' => array(0 => 'nordcode_quest.admin.quest'), 'Nordcode\\QuestBundle\\Entity\\QuestCategory' => array(0 => 'nordcode_quest.admin.quest_category'), 'Nordcode\\QuestBundle\\Entity\\QuestPhoto' => array(0 => 'nordcode_quest.admin.quest_photo'), 'Nordcode\\TippsBundle\\Entity\\Tipp' => array(0 => 'nordcode_tipps.admin.tipp')));
        return $instance;
    }
    protected function getSonata_Admin_Route_DefaultGeneratorService()
    {
        return $this->services['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator($this->get('router'));
    }
    protected function getSonata_Admin_Route_PathInfoService()
    {
        return $this->services['sonata.admin.route.path_info'] = new \Sonata\AdminBundle\Route\PathInfoBuilder($this->get('sonata.admin.audit.manager'));
    }
    protected function getSonata_Admin_Route_QueryStringService()
    {
        return $this->services['sonata.admin.route.query_string'] = new \Sonata\AdminBundle\Route\QueryStringBuilder($this->get('sonata.admin.audit.manager'));
    }
    protected function getSonata_Admin_RouteLoaderService()
    {
        return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader($this->get('sonata.admin.pool'), array(0 => 'sonata.user.admin.user', 1 => 'sonata.user.admin.group', 2 => 'nordcode_geo.admin.city', 3 => 'nordcode_geo.admin.country', 4 => 'nordcode_switchfit.admin.payment_instruction', 5 => 'nordcode_switchfit.admin.payment', 6 => 'nordcode_switchfit.admin.transaction', 7 => 'nordcode_switchfit.admin.course_price', 8 => 'nordcode_switchfit.admin.course_promo_code', 9 => 'nordcode_switchfit.admin.course', 10 => 'nordcode_switchfit.admin.user_course', 11 => 'nordcode_switchfit.admin.user_course_day', 12 => 'nordcode_switchfit.admin.user_course_week', 13 => 'nordcode_switchfit.admin.timetable_item', 14 => 'nordcode_switchfit.admin.warmup_task', 15 => 'nordcode_switchfit.admin.user_course_warmup', 16 => 'nordcode_switchfit.admin.body_type', 17 => 'nordcode_switchfit.admin.meal_category', 18 => 'nordcode_switchfit.admin.meal_type', 19 => 'nordcode_switchfit.admin.meal', 20 => 'nordcode_switchfit.admin.meal_photo', 21 => 'nordcode_switchfit.admin.meal_favorite', 22 => 'nordcode_switchfit.admin.product', 23 => 'nordcode_switchfit.admin.workout_category', 24 => 'nordcode_switchfit.admin.workout_type', 25 => 'nordcode_switchfit.admin.workout', 26 => 'nordcode_switchfit.admin.workout_photo', 27 => 'nordcode_switchfit.admin.workout_dayofcourse', 28 => 'nordcode_switchfit.admin.workout_favorite', 29 => 'nordcode_switchfit.admin.workout_location', 30 => 'nordcode_switchfit.admin.contact_message', 31 => 'nordcode_switchfit.admin.suggest_template', 32 => 'nordcode_switchfit.admin.suggest_template_has_day', 33 => 'nordcode_switchfit.admin.suggest_day', 34 => 'nordcode_switchfit.admin.suggest_day_item', 35 => 'nordcode_switchfit.admin.diary', 36 => 'nordcode_switchfit.admin.diary_entry', 37 => 'nordcode_switchfit.admin.diary_entry_comment', 38 => 'nordcode_switchfit.admin.diary_entry_vote', 39 => 'nordcode_switchfit.admin.content', 40 => 'nordcode_switchfit.admin.sf_life_header', 41 => 'nordcode_switchfit.admin.sf_life_video', 42 => 'nordcode_academy.admin.academy', 43 => 'nordcode_academy.admin.academy_has_module', 44 => 'nordcode_academy.admin.module', 45 => 'nordcode_academy.admin.topic', 46 => 'nordcode_academy.admin.question', 47 => 'nordcode_academy.admin.answer', 48 => 'nordcode_notification.admin.notice', 49 => 'nordcode_qa.admin.question', 50 => 'nordcode_qa.admin.answer', 51 => 'nordcode_qa.admin.category', 52 => 'nordcode_qa.admin.vote', 53 => 'nordcode_quest.admin.quest', 54 => 'nordcode_quest.admin.quest_category', 55 => 'nordcode_quest.admin.quest_photo', 56 => 'nordcode_tipps.admin.tipp'), $this);
    }
    protected function getSonata_Admin_Search_HandlerService()
    {
        return $this->services['sonata.admin.search.handler'] = new \Sonata\AdminBundle\Search\SearchHandler($this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Security_HandlerService()
    {
        return $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\RoleSecurityHandler($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE), array(0 => 'ROLE_SUPER_ADMIN'));
    }
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        return $this->services['sonata.admin.twig.extension'] = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension($this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Validator_InlineService()
    {
        return $this->services['sonata.admin.validator.inline'] = new \Sonata\AdminBundle\Validator\InlineValidator($this, $this->get('validator.validator_factory'));
    }
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }
    protected function getSonata_Block_Cache_Handler_NoopService()
    {
        return $this->services['sonata.block.cache.handler.noop'] = new \Sonata\BlockBundle\Cache\NoopHttpCacheHandler();
    }
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        $this->services['sonata.block.context_manager.default'] = $instance = new \Sonata\BlockBundle\Block\BlockContextManager($this->get('nordcode_admin_page_board.block.loader.chain'), $this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop', 'sonata.block.service.text' => 'sonata.cache.noop')), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->addSettingsByType('nordcode_user.admin.block.user_main_data', array('title' => 'User data', 'route_params' => NULL), true);
        $instance->addSettingsByType('nordcode_user.admin.block.user_academy', array('title' => 'Academy progress', 'route_params' => NULL), true);
        $instance->addSettingsByType('nordcode_user.admin.block.user_course', array('title' => 'Course data', 'route_params' => NULL), true);
        $instance->addSettingsByType('nordcode_user.admin.block.user_course_health', array('title' => 'Course board', 'route_params' => NULL), true);
        $instance->addSettingsByType('nordcode_user.admin.block.user_course_weekly', array('title' => 'Weekly board', 'route_params' => NULL), true);
        $instance->addSettingsByType('nordcode_user.admin.block.meal_favorite', array('title' => 'Meal favorites', 'route_params' => NULL), true);
        $instance->addSettingsByType('nordcode_user.admin.block.workout_favorite', array('title' => 'Workout favorites', 'route_params' => NULL), true);
        $instance->addSettingsByType('nordcode_user.admin.block.diary_entries', array('title' => 'Diary entries', 'route_params' => NULL), true);
        return $instance;
    }
    protected function getSonata_Block_Exception_Filter_DebugOnlyService()
    {
        return $this->services['sonata.block.exception.filter.debug_only'] = new \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter(false);
    }
    protected function getSonata_Block_Exception_Filter_IgnoreBlockExceptionService()
    {
        return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
    }
    protected function getSonata_Block_Exception_Filter_KeepAllService()
    {
        return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
    }
    protected function getSonata_Block_Exception_Filter_KeepNoneService()
    {
        return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }
    protected function getSonata_Block_Exception_Renderer_InlineService()
    {
        return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception.html.twig');
    }
    protected function getSonata_Block_Exception_Renderer_InlineDebugService()
    {
        return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception_debug.html.twig', false, true);
    }
    protected function getSonata_Block_Exception_Renderer_ThrowService()
    {
        return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, array('debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'), array('inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'), array(), array());
        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('throw');
        return $instance;
    }
    protected function getSonata_Block_Form_Type_BlockService()
    {
        return $this->services['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType($this->get('sonata.block.manager'));
    }
    protected function getSonata_Block_Form_Type_ContainerTemplateService()
    {
        return $this->services['sonata.block.form.type.container_template'] = new \Sonata\BlockBundle\Form\Type\ContainerTemplateType(array('SonataBlockBundle:Block:block_container.html.twig' => 'SonataBlockBundle default template'));
    }
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader(array(0 => 'sonata.admin.block.admin_list', 1 => 'sonata.block.service.text'));
    }
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer($this->get('sonata.block.manager'), $this->get('sonata.block.exception.strategy.manager'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE), false);
    }
    protected function getSonata_Block_Service_ContainerService()
    {
        return $this->services['sonata.block.service.container'] = new \Sonata\BlockBundle\Block\Service\ContainerBlockService('sonata.block.container', $this->get('templating'));
    }
    protected function getSonata_Block_Service_EmptyService()
    {
        return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', $this->get('templating'));
    }
    protected function getSonata_Block_Service_MenuService()
    {
        return $this->services['sonata.block.service.menu'] = new \Sonata\BlockBundle\Block\Service\MenuBlockService('sonata.block.menu', $this->get('templating'), $this->get('knp_menu.menu_provider'), array());
    }
    protected function getSonata_Block_Service_RssService()
    {
        return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', $this->get('templating'));
    }
    protected function getSonata_Block_Service_TemplateService()
    {
        return $this->services['sonata.block.service.template'] = new \Sonata\BlockBundle\Block\Service\TemplateBlockService('sonata.block.template', $this->get('templating'));
    }
    protected function getSonata_Block_Service_TextService()
    {
        return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', $this->get('templating'));
    }
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper($this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop', 'sonata.block.service.text' => 'sonata.cache.noop')), $this->get('sonata.block.renderer.default'), $this->get('sonata.block.context_manager.default'), $this->get('event_dispatcher'), NULL, $this->get('sonata.block.cache.handler.default', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL);
    }
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables(array('block_base' => 'SonataBlockBundle:Block:block_base.html.twig', 'block_container' => 'SonataBlockBundle:Block:block_container.html.twig'));
    }
    protected function getSonata_Core_Date_MomentFormatConverterService()
    {
        return $this->services['sonata.core.date.moment_format_converter'] = new \Sonata\CoreBundle\Date\MomentFormatConverter();
    }
    protected function getSonata_Core_Flashmessage_ManagerService()
    {
        return $this->services['sonata.core.flashmessage.manager'] = new \Sonata\CoreBundle\FlashMessage\FlashManager($this->get('session'), $this->get('translator.default'), array('success' => array('success' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_success' => array('domain' => 'SonataAdminBundle'), 'sonata_user_success' => array('domain' => 'SonataUserBundle'), 'fos_user_success' => array('domain' => 'FOSUserBundle')), 'warning' => array('warning' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_info' => array('domain' => 'SonataAdminBundle')), 'error' => array('error' => array('domain' => 'SonataCoreBundle'), 'sonata_flash_error' => array('domain' => 'SonataAdminBundle'), 'sonata_user_error' => array('domain' => 'SonataUserBundle'))), array('success' => 'success', 'warning' => 'warning', 'error' => 'error'));
    }
    protected function getSonata_Core_Flashmessage_Twig_ExtensionService()
    {
        return $this->services['sonata.core.flashmessage.twig.extension'] = new \Sonata\CoreBundle\Twig\Extension\FlashMessageExtension($this->get('sonata.core.flashmessage.manager'));
    }
    protected function getSonata_Core_Form_Type_ArrayService()
    {
        return $this->services['sonata.core.form.type.array'] = new \Sonata\CoreBundle\Form\Type\ImmutableArrayType();
    }
    protected function getSonata_Core_Form_Type_BooleanService()
    {
        return $this->services['sonata.core.form.type.boolean'] = new \Sonata\CoreBundle\Form\Type\BooleanType();
    }
    protected function getSonata_Core_Form_Type_CollectionService()
    {
        return $this->services['sonata.core.form.type.collection'] = new \Sonata\CoreBundle\Form\Type\CollectionType();
    }
    protected function getSonata_Core_Form_Type_DatePickerService()
    {
        return $this->services['sonata.core.form.type.date_picker'] = new \Sonata\CoreBundle\Form\Type\DatePickerType($this->get('sonata.core.date.moment_format_converter'));
    }
    protected function getSonata_Core_Form_Type_DateRangeService()
    {
        return $this->services['sonata.core.form.type.date_range'] = new \Sonata\CoreBundle\Form\Type\DateRangeType($this->get('translator.default'));
    }
    protected function getSonata_Core_Form_Type_DatetimePickerService()
    {
        return $this->services['sonata.core.form.type.datetime_picker'] = new \Sonata\CoreBundle\Form\Type\DateTimePickerType($this->get('sonata.core.date.moment_format_converter'));
    }
    protected function getSonata_Core_Form_Type_DatetimeRangeService()
    {
        return $this->services['sonata.core.form.type.datetime_range'] = new \Sonata\CoreBundle\Form\Type\DateTimeRangeType($this->get('translator.default'));
    }
    protected function getSonata_Core_Form_Type_EqualService()
    {
        return $this->services['sonata.core.form.type.equal'] = new \Sonata\CoreBundle\Form\Type\EqualType($this->get('translator.default'));
    }
    protected function getSonata_Core_Form_Type_TranslatableChoiceService()
    {
        return $this->services['sonata.core.form.type.translatable_choice'] = new \Sonata\CoreBundle\Form\Type\TranslatableChoiceType($this->get('translator.default'));
    }
    protected function getSonata_Core_Model_Adapter_ChainService()
    {
        $this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();
        $instance->addAdapter(new \Sonata\CoreBundle\Model\Adapter\DoctrineORMAdapter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        return $instance;
    }
    protected function getSonata_Core_Twig_Extension_TextService()
    {
        return $this->services['sonata.core.twig.extension.text'] = new \Twig_Extensions_Extension_Text();
    }
    protected function getSonata_Core_Twig_StatusExtensionService()
    {
        $this->services['sonata.core.twig.status_extension'] = $instance = new \Sonata\CoreBundle\Twig\Extension\StatusExtension();
        $instance->addStatusService($this->get('sonata.core.flashmessage.manager'));
        return $instance;
    }
    protected function getSonata_Core_Twig_TemplateExtensionService()
    {
        return $this->services['sonata.core.twig.template_extension'] = new \Sonata\CoreBundle\Twig\Extension\TemplateExtension(false, $this->get('translator.default'), $this->get('sonata.core.model.adapter.chain'));
    }
    protected function getSonata_User_Admin_GroupService()
    {
        $instance = new \Sonata\UserBundle\Admin\Entity\GroupAdmin('sonata.user.admin.group', 'Nordcode\\UserBundle\\Entity\\Group', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('groups');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getSonata_User_Admin_UserService()
    {
        $instance = new \Nordcode\UserBundle\Admin\UserAdmin('sonata.user.admin.user', 'Nordcode\\UserBundle\\Entity\\User', 'SonataAdminBundle:CRUD');
        $instance->setUserManager($this->get('nordcode_user.user_manager'));
        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('users');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig', 'layout' => 'NordcodeAdminBundle::layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array('EDIT' => array(0 => 'EDIT'), 'LIST' => array(0 => 'LIST'), 'CREATE' => array(0 => 'CREATE'), 'VIEW' => array(0 => 'VIEW'), 'DELETE' => array(0 => 'DELETE'), 'EXPORT' => array(0 => 'EXPORT'), 'OPERATOR' => array(0 => 'OPERATOR'), 'MASTER' => array(0 => 'MASTER')));
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getSonata_User_Api_Form_Type_GroupService()
    {
        return $this->services['sonata.user.api.form.type.group'] = new \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType($this->get('jms_serializer.metadata_factory'), $this->get('doctrine'), 'sonata_user_api_form_group', 'Nordcode\\UserBundle\\Entity\\Group', 'sonata_api_write');
    }
    protected function getSonata_User_Api_Form_Type_UserService()
    {
        return $this->services['sonata.user.api.form.type.user'] = new \Sonata\CoreBundle\Form\Type\DoctrineORMSerializationType($this->get('jms_serializer.metadata_factory'), $this->get('doctrine'), 'sonata_user_api_form_user', 'Nordcode\\UserBundle\\Entity\\User', 'sonata_api_write');
    }
    protected function getSonata_User_Block_AccountService()
    {
        return $this->services['sonata.user.block.account'] = new \Sonata\UserBundle\Block\AccountBlockService('sonata.user.block.account', $this->get('templating'), $this->get('security.context'));
    }
    protected function getSonata_User_Block_MenuService()
    {
        return $this->services['sonata.user.block.menu'] = new \Sonata\UserBundle\Block\ProfileMenuBlockService('sonata.user.block.menu', $this->get('templating'), $this->get('knp_menu.menu_provider'), $this->get('sonata.user.profile.menu_builder'));
    }
    protected function getSonata_User_Controller_Api_GroupService()
    {
        return $this->services['sonata.user.controller.api.group'] = new \Sonata\UserBundle\Controller\Api\GroupController($this->get('sonata.user.group_manager'), $this->get('form.factory'));
    }
    protected function getSonata_User_Controller_Api_UserService()
    {
        return $this->services['sonata.user.controller.api.user'] = new \Sonata\UserBundle\Controller\Api\UserController($this->get('sonata.user.user_manager'), $this->get('sonata.user.group_manager'), $this->get('form.factory'));
    }
    protected function getSonata_User_EditableRoleBuilderService()
    {
        return $this->services['sonata.user.editable_role_builder'] = new \Sonata\UserBundle\Security\EditableRolesBuilder($this->get('security.context'), $this->get('sonata.admin.pool'), array('ROLE_USER_NOT_PAID' => array(0 => 'ROLE_USER'), 'ROLE_USER_PAID' => array(0 => 'ROLE_USER'), 'ROLE_USER_SENT_OUT_CONF_EMAIL' => array(0 => 'ROLE_USER'), 'ROLE_USER_REGISTER' => array(0 => 'ROLE_USER_NOT_PAID'), 'ROLE_USER_QUESTIONNAIRE' => array(0 => 'ROLE_USER_REGISTER'), 'ROLE_USER_APP' => array(0 => 'ROLE_USER_QUESTIONNAIRE'), 'ROLE_USER_ACTIVE_COURSE' => array(0 => 'ROLE_USER_APP'), 'ROLE_ADMIN' => array(0 => 'ROLE_USER_ACTIVE_COURSE'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_SONATA_ADMIN', 2 => 'ROLE_ADMIN', 3 => 'ROLE_ALLOWED_TO_SWITCH')));
    }
    protected function getSonata_User_Form_GenderListService()
    {
        return $this->services['sonata.user.form.gender_list'] = new \Sonata\CoreBundle\Form\Type\StatusType('Nordcode\\UserBundle\\Entity\\User', 'getGenderList', 'sonata_user_gender');
    }
    protected function getSonata_User_Form_Type_SecurityRolesService()
    {
        return $this->services['sonata.user.form.type.security_roles'] = new \Sonata\UserBundle\Form\Type\SecurityRolesType($this->get('sonata.user.editable_role_builder'));
    }
    protected function getSonata_User_GroupManagerService()
    {
        return $this->services['sonata.user.group_manager'] = new \Sonata\UserBundle\Entity\GroupManager($this->get('fos_user.entity_manager'), 'Nordcode\\UserBundle\\Entity\\Group');
    }
    protected function getSonata_User_Manager_UserService()
    {
        return $this->services['sonata.user.manager.user'] = new \Sonata\UserBundle\Entity\UserManagerProxy('Sonata\\UserBundle\\Entity\\User', $this->get('doctrine'), $this->get('sonata.user.user_manager'));
    }
    protected function getSonata_User_Profile_FormService()
    {
        return $this->services['sonata.user.profile.form'] = $this->get('form.factory')->createNamed('sonata_user_profile_form', 'sonata_user_profile', NULL, array('validation_groups' => array(0 => 'Profile', 1 => 'Default'), 'translation_domain' => 'SonataUserBundle'));
    }
    protected function getSonata_User_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sonata.user.profile.form.handler', 'request');
        }
        return $this->services['sonata.user.profile.form.handler'] = $this->scopedServices['request']['sonata.user.profile.form.handler'] = new \Sonata\UserBundle\Form\Handler\ProfileFormHandler($this->get('sonata.user.profile.form'), $this->get('request'), $this->get('nordcode_user.user_manager'));
    }
    protected function getSonata_User_Profile_Form_TypeService()
    {
        return $this->services['sonata.user.profile.form.type'] = new \Sonata\UserBundle\Form\Type\ProfileType('Nordcode\\UserBundle\\Entity\\User');
    }
    protected function getSonata_User_Profile_MenuBuilderService()
    {
        return $this->services['sonata.user.profile.menu_builder'] = new \Sonata\UserBundle\Menu\ProfileMenuBuilder($this->get('knp_menu.factory'), $this->get('translator.default'), array(0 => array('route' => 'sonata_user_profile_edit', 'label' => 'link_edit_profile', 'domain' => 'SonataUserBundle', 'route_parameters' => array()), 1 => array('route' => 'sonata_user_profile_edit_authentication', 'label' => 'link_edit_authentication', 'domain' => 'SonataUserBundle', 'route_parameters' => array())), $this->get('event_dispatcher'));
    }
    protected function getSonata_User_Registration_FormService()
    {
        return $this->services['sonata.user.registration.form'] = $this->get('form.factory')->createNamed('sonata_user_registration_form', 'sonata_user_registration', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }
    protected function getSonata_User_Registration_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sonata.user.registration.form.handler', 'request');
        }
        return $this->services['sonata.user.registration.form.handler'] = $this->scopedServices['request']['sonata.user.registration.form.handler'] = new \Sonata\UserBundle\Form\Handler\RegistrationFormHandler($this->get('sonata.user.registration.form'), $this->get('request'), $this->get('nordcode_user.user_manager'), $this->get('fos_user.mailer'), $this->get('fos_user.util.token_generator'));
    }
    protected function getSonata_User_Registration_Form_TypeService()
    {
        return $this->services['sonata.user.registration.form.type'] = new \Sonata\UserBundle\Form\Type\RegistrationFormType('Nordcode\\UserBundle\\Entity\\User', array());
    }
    protected function getSonata_User_Serializer_Handler_UserService()
    {
        return $this->services['sonata.user.serializer.handler.user'] = new \Sonata\UserBundle\Serializer\UserSerializerHandler($this->get('sonata.user.manager.user'));
    }
    protected function getSonata_User_Twig_GlobalService()
    {
        return $this->services['sonata.user.twig.global'] = new \Sonata\UserBundle\Twig\GlobalVariables($this);
    }
    protected function getSonata_User_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');
        return $this->services['sonata.user.user_manager'] = new \Sonata\UserBundle\Entity\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('fos_user.entity_manager'), 'Nordcode\\UserBundle\\Entity\\User');
    }
    protected function getStofDoctrineExtensions_EventListener_LocaleService()
    {
        return $this->services['stof_doctrine_extensions.event_listener.locale'] = new \Stof\DoctrineExtensionsBundle\EventListener\LocaleListener($this->get('stof_doctrine_extensions.listener.translatable'));
    }
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }
    protected function getSwiftmailer_Mailer_Default_Spool_ServiceService()
    {
        $this->services['swiftmailer.mailer.default.spool.service'] = $instance = new \Snc\RedisBundle\SwiftMailer\RedisSpool();
        $instance->setRedis($this->get('snc_redis.phpredis.mailer_spool'));
        $instance->setKey('swiftmailer');
        return $instance;
    }
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool.service'));
        $instance->registerPlugin($this->get('swiftmailer.plugin.impersonate'));
        $instance->registerPlugin($this->get('swiftmailer.plugin.redirecting'));
        return $instance;
    }
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername('team@switchfit.io');
        $a->setPassword('goswtichfit1991');
        $a->setAuthMode('login');
        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));
        $instance->setHost('smtp.gmail.com');
        $instance->setPort(465);
        $instance->setEncryption('ssl');
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        return $instance;
    }
    protected function getSwiftmailer_Plugin_ImpersonateService()
    {
        return $this->services['swiftmailer.plugin.impersonate'] = new \Swift_Plugins_ImpersonatePlugin('team@switchfit.io');
    }
    protected function getSwiftmailer_Plugin_RedirectingService()
    {
        return $this->services['swiftmailer.plugin.redirecting'] = new \Swift_Plugins_RedirectingPlugin('kim@wuestkamp.com', array());
    }
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }
    protected function getTemplating_Asset_Package_BootstrapCdn_HttpService()
    {
        return $this->services['templating.asset.package.bootstrap_cdn.http'] = new \Symfony\Component\Templating\Asset\UrlPackage(array(0 => 'http://netdna.bootstrapcdn.com'), NULL, '%s?%s');
    }
    protected function getTemplating_Asset_Package_BootstrapCdn_SslService()
    {
        return $this->services['templating.asset.package.bootstrap_cdn.ssl'] = new \Symfony\Component\Templating\Asset\UrlPackage(array(0 => 'https://netdna.bootstrapcdn.com'), NULL, '%s?%s');
    }
    protected function getTemplating_Asset_Package_CloudflareCdn_HttpService()
    {
        return $this->services['templating.asset.package.cloudflare_cdn.http'] = new \Symfony\Component\Templating\Asset\UrlPackage(array(0 => 'http://cdnjs.cloudflare.com/ajax/libs'), NULL, '%s?%s');
    }
    protected function getTemplating_Asset_Package_CloudflareCdn_SslService()
    {
        return $this->services['templating.asset.package.cloudflare_cdn.ssl'] = new \Symfony\Component\Templating\Asset\UrlPackage(array(0 => 'https://cdnjs.cloudflare.com/ajax/libs'), NULL, '%s?%s');
    }
    protected function getTemplating_Asset_Package_JqueryCdn_HttpService()
    {
        return $this->services['templating.asset.package.jquery_cdn.http'] = new \Symfony\Component\Templating\Asset\UrlPackage(array(0 => 'http://ajax.googleapis.com/ajax/libs'), NULL, '%s?%s');
    }
    protected function getTemplating_Asset_Package_JqueryCdn_SslService()
    {
        return $this->services['templating.asset.package.jquery_cdn.ssl'] = new \Symfony\Component\Templating\Asset\UrlPackage(array(0 => 'https://ajax.googleapis.com/ajax/libs'), NULL, '%s?%s');
    }
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }
        $a = $this->get('request');
        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($a, NULL, '%s?%s'), array('cloudflare_cdn' => $this->get('templating.asset.package_factory')->getPackage($a, 'templating.asset.package.cloudflare_cdn.http', 'templating.asset.package.cloudflare_cdn.ssl'), 'jquery_cdn' => $this->get('templating.asset.package_factory')->getPackage($a, 'templating.asset.package.jquery_cdn.http', 'templating.asset.package.jquery_cdn.ssl'), 'bootstrap_cdn' => $this->get('templating.asset.package_factory')->getPackage($a, 'templating.asset.package.bootstrap_cdn.http', 'templating.asset.package.bootstrap_cdn.ssl')));
    }
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, ($this->targetDirs[4].'/repo/branch/app/switchfit'), 'UTF-8');
    }
    protected function getTemplating_Helper_FormService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('templating.globals'));
        $a->setCharset('UTF-8');
        $a->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.static', 'jms_serializer' => 'jms_serializer.templating.helper.serializer', 'sonata_block' => 'sonata.block.templating.helper', 'vich_uploader' => 'vich_uploader.templating.helper.uploader_helper', 'ivory_ckeditor' => 'ivory_ck_editor.templating.helper', 'nordcode_uploader' => 'nordcode_uploader.templating.helper.uploader_helper', 'oauth' => 'hwi_oauth.templating.helper.oauth'));
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($a, array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('router'));
        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL);
        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);
        return $instance;
    }
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();
        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));
        return $instance;
    }
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');
        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        return $instance;
    }
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));
        return $instance;
    }
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => false));
        $instance->setFallbackLocales(array(0 => 'de'));
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 'sv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 'hr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf'), 'zh_TW', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 'th', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 'vi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 'cs', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 'es', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 'fi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 'gl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 'he', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 'id', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 'nl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 'uk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 'el', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 'az', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf'), 'cy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 'en', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 'lt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 'ca', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 'ru', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 'fr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 'lb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 'de', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 'tr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 'pl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 'ro', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 'sk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 'hy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 'bg', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf'), 'sq', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 'da', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 'eu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 'nb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 'fa', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 'ar', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 'mn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 'no', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 'ja', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 'pt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 'et', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 'hu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 'it', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 'af', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 'sl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 'sv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 'hr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 'cs', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 'es', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 'fi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 'gl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 'he', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 'lv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 'id', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 'nl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 'uk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 'el', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 'az', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 'en', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 'lt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 'ca', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 'ru', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 'fr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 'lb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 'de', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 'pl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 'ro', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 'sk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf'), 'hy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 'bg', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 'da', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 'eu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf'), 'nb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 'fa', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 'ar', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf'), 'mn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 'ja', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 'pt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf'), 'et', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 'hu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 'it', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 'sl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pl.xlf'), 'pl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ua.xlf'), 'ua', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sr_Latn.xlf'), 'sr_Latn', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.fr.xlf'), 'fr', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.nl.xlf'), 'nl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.de.xlf'), 'de', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sk.xlf'), 'sk', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.es.xlf'), 'es', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.da.xlf'), 'da', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sl.xlf'), 'sl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.hu.xlf'), 'hu', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sv.xlf'), 'sv', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ja.xlf'), 'ja', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.he.xlf'), 'he', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.tr.xlf'), 'tr', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.fa.xlf'), 'fa', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.zh_CN.xlf'), 'zh_CN', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.no.xlf'), 'no', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sr_Cyrl.xlf'), 'sr_Cyrl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pt_PT.xlf'), 'pt_PT', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ru.xlf'), 'ru', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.hr.xlf'), 'hr', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ca.xlf'), 'ca', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.el.xlf'), 'el', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ro.xlf'), 'ro', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.lb.xlf'), 'lb', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.id.xlf'), 'id', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.az.xlf'), 'az', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.it.xlf'), 'it', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.lt.xlf'), 'lt', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.en.xlf'), 'en', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ar.xlf'), 'ar', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.th.xlf'), 'th', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.gl.xlf'), 'gl', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.vi.xlf'), 'vi', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.bg.xlf'), 'bg', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.cs.xlf'), 'cs', 'security');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pt_BR.xlf'), 'pt_BR', 'security');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hu.yml'), 'hu', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hr.yml'), 'hr', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 'sr_Latn', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fi.yml'), 'fi', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sv.yml'), 'sv', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ja.yml'), 'ja', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fr.yml'), 'fr', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.es.yml'), 'es', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt_BR.yml'), 'pt_BR', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.zh_CN.yml'), 'zh_CN', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sv.yml'), 'sv', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.zh_CN.yml'), 'zh_CN', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.tr.yml'), 'tr', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.da.yml'), 'da', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ca.yml'), 'ca', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lv.yml'), 'lv', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.uk.yml'), 'uk', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fi.yml'), 'fi', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.da.yml'), 'da', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sl.yml'), 'sl', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ru.yml'), 'ru', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pl.yml'), 'pl', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.bg.yml'), 'bg', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hu.yml'), 'hu', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sr_Latn.yml'), 'sr_Latn', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sk.yml'), 'sk', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lt.yml'), 'lt', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.de.yml'), 'de', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.et.yml'), 'et', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt.yml'), 'pt', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.tr.yml'), 'tr', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ro.yml'), 'ro', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lv.yml'), 'lv', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hr.yml'), 'hr', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.bg.yml'), 'bg', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lb.yml'), 'lb', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.cs.yml'), 'cs', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fa.yml'), 'fa', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.eu.yml'), 'eu', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sk.yml'), 'sk', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sl.yml'), 'sl', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.de.yml'), 'de', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fa.yml'), 'fa', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.nl.yml'), 'nl', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.cs.yml'), 'cs', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.es.yml'), 'es', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pl.yml'), 'pl', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ja.yml'), 'ja', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ru.yml'), 'ru', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_PT.yml'), 'pt_PT', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.nl.yml'), 'nl', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fr.yml'), 'fr', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.en.yml'), 'en', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lt.yml'), 'lt', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.it.yml'), 'it', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.eu.yml'), 'eu', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.uk.yml'), 'uk', 'FOSUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/FOSUserBundle.fr.xliff'), 'fr', 'FOSUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.pt_BR.xliff'), 'pt_BR', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.en.xliff'), 'en', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.sl.xliff'), 'sl', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.de.xliff'), 'de', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.ru.xliff'), 'ru', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.cs.xliff'), 'cs', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.bg.xliff'), 'bg', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.lt.xliff'), 'lt', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.pl.xliff'), 'pl', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.nl.xliff'), 'nl', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.fr.xliff'), 'fr', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/FOSUserBundle.en.xliff'), 'en', 'FOSUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.it.xliff'), 'it', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.ca.xliff'), 'ca', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.zh_TW.xliff'), 'zh_TW', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.sk.xliff'), 'sk', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.pt.xliff'), 'pt', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.fa.xliff'), 'fa', 'SonataUserBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/translations/SonataUserBundle.es.xliff'), 'es', 'SonataUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/UserBundle/Resources/translations/validators.de.yml'), 'de', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/UserBundle/Resources/translations/NordcodeUserBundle.de.yml'), 'de', 'NordcodeUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/UserBundle/Resources/translations/NordcodeUserBundle.en.yml'), 'en', 'NordcodeUserBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/UserBundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/PaymentSkrillBundle/Resources/translations/NordcodePaymentSkrillBundle.de.yml'), 'de', 'NordcodePaymentSkrillBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/PaymentSkrillBundle/Resources/translations/NordcodePaymentSkrillBundle.en.yml'), 'en', 'NordcodePaymentSkrillBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt.xliff'), 'pt', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ca.xliff'), 'ca', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fa.xliff'), 'fa', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lt.xliff'), 'lt', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.bg.xliff'), 'bg', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ro.xliff'), 'ro', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.eu.xliff'), 'eu', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hr.xliff'), 'hr', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.it.xliff'), 'it', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sl.xliff'), 'sl', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.de.xliff'), 'de', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.uk.xliff'), 'uk', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.hu.xliff'), 'hu', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.lb.xliff'), 'lb', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.zh_CN.xliff'), 'zh_CN', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.cs.xliff'), 'cs', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ja.xliff'), 'ja', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pl.xliff'), 'pl', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.fr.xliff'), 'fr', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.sk.xliff'), 'sk', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.en.xliff'), 'en', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.ru.xliff'), 'ru', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.pt_BR.xliff'), 'pt_BR', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.es.xliff'), 'es', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/translations/SonataCoreBundle.nl.xliff'), 'nl', 'SonataCoreBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ru.xliff'), 'ru', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pl.xliff'), 'pl', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sk.xliff'), 'sk', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fa.xliff'), 'fa', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lt.xliff'), 'lt', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.fr.xliff'), 'fr', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.sl.xliff'), 'sl', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.uk.xliff'), 'uk', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.cs.xliff'), 'cs', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ca.xliff'), 'ca', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ja.xliff'), 'ja', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt.xliff'), 'pt', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.bg.xliff'), 'bg', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.nl.xliff'), 'nl', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hu.xliff'), 'hu', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.ro.xliff'), 'ro', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.lb.xliff'), 'lb', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.en.xliff'), 'en', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.eu.xliff'), 'eu', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.pt_BR.xliff'), 'pt_BR', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.hr.xliff'), 'hr', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.de.xliff'), 'de', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.zh_CN.xliff'), 'zh_CN', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.es.xliff'), 'es', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/translations/SonataAdminBundle.it.xliff'), 'it', 'SonataAdminBundle');
        $instance->addResource('xliff', ($this->targetDirs[4].'/repo/branch/src/Nordcode/AdminBundle/Resources/translations/SonataAdminBundle.en.xliff'), 'en', 'SonataAdminBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/SwitchfitBundle/Resources/translations/NordcodeSwitchfitBundle.en.yml'), 'en', 'NordcodeSwitchfitBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/SwitchfitBundle/Resources/translations/validators.de.yml'), 'de', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/SwitchfitBundle/Resources/translations/NordcodeSwitchfitBundle.de.yml'), 'de', 'NordcodeSwitchfitBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/SwitchfitBundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/NotificationBundle/Resources/translations/NordcodeNotificationBundle.en.yml'), 'en', 'NordcodeNotificationBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/NotificationBundle/Resources/translations/NordcodeNotificationBundle.de.yml'), 'de', 'NordcodeNotificationBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/QABundle/Resources/translations/validators.de.yml'), 'de', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/QABundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/SignupBundle/Resources/translations/NordcodeSignupBundle.en.yml'), 'en', 'NordcodeSignupBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/SignupBundle/Resources/translations/NordcodeSignupBundle.de.yml'), 'de', 'NordcodeSignupBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/SignupBundle/Resources/translations/validators.de.yml'), 'de', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/src/Nordcode/SignupBundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.it.yml'), 'it', 'HWIOAuthBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.zh.yml'), 'zh', 'HWIOAuthBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.pl.yml'), 'pl', 'HWIOAuthBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.es.yml'), 'es', 'HWIOAuthBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.fr.yml'), 'fr', 'HWIOAuthBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.tr.yml'), 'tr', 'HWIOAuthBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.fa.yml'), 'fa', 'HWIOAuthBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.nl.yml'), 'nl', 'HWIOAuthBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.de.yml'), 'de', 'HWIOAuthBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.ru.yml'), 'ru', 'HWIOAuthBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.uk.yml'), 'uk', 'HWIOAuthBundle');
        $instance->addResource('yml', ($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/translations/HWIOAuthBundle.en.yml'), 'en', 'HWIOAuthBundle');
        $instance->addResource('xlf', ($this->targetDirs[4].'/repo/branch/src/Nordcode/TippsBundle/Resources/translations/messages.fr.xlf'), 'fr', 'messages');
        return $instance;
    }
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => array(0 => 'Symfony\\Bundle\\TwigBundle\\TwigDefaultEscapingStrategy', 1 => 'guess'), 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array()));
        $instance->addExtension($this->get('twig.extension.intl'));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, ($this->targetDirs[4].'/repo/branch/app/switchfit'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig', 1 => 'form_div_layout.html.twig', 2 => 'SonataUserBundle:Form:form_admin_fields.html.twig', 3 => 'NordcodeUploaderBundle:Form:fields.html.twig')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(0 => 'FrameworkBundle', 1 => 'SecurityBundle', 2 => 'TwigBundle', 3 => 'MonologBundle', 4 => 'AsseticBundle', 5 => 'SwiftmailerBundle', 6 => 'JMSSerializerBundle', 7 => 'DoctrineBundle', 8 => 'StofDoctrineExtensionsBundle', 9 => 'KnpMenuBundle', 10 => 'SncRedisBundle', 11 => 'FOSUserBundle', 12 => 'SonataUserBundle', 13 => 'NordcodeUserBundle', 14 => 'JMSPaymentCoreBundle', 15 => 'NordcodeHelperBundle', 16 => 'NordcodeCoreBundle', 17 => 'NordcodeGeoBundle', 18 => 'NordcodePaymentSkrillBundle', 19 => 'NordcodeTranslationBundle', 20 => 'NordcodeLoggerBundle', 21 => 'DoctrineMigrationsBundle', 22 => 'FOSRestBundle', 23 => 'NelmioApiDocBundle', 24 => 'SonatajQueryBundle', 25 => 'SonataCoreBundle', 26 => 'SonataAdminBundle', 27 => 'SonataDoctrineORMAdminBundle', 28 => 'SonataBlockBundle', 29 => 'KnpGaufretteBundle', 30 => 'VichUploaderBundle', 31 => 'RSQueueBundle', 32 => 'BazingaJsTranslationBundle', 33 => 'IvoryCKEditorBundle', 34 => 'FMElfinderBundle', 35 => 'NordcodeAdminBundle', 36 => 'NordcodeRestBundle', 37 => 'NordcodeSwitchfitBundle', 38 => 'NordcodeApiDocBundle', 39 => 'NordcodeUploaderBundle', 40 => 'NordcodeAcademyBundle', 41 => 'NordcodeNotificationBundle', 42 => 'NordcodeQABundle', 43 => 'NordcodeAdminPageBoardBundle', 44 => 'NordcodeQuestBundle', 45 => 'NordcodePointBundle', 46 => 'NordcodeSignupBundle', 47 => 'HWIOAuthBundle', 48 => 'NordcodeTippsBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerExtension($this->get('jms_serializer')));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        $instance->addExtension($this->get('nelmio_api_doc.twig.extension.extra_markdown'));
        $instance->addExtension($this->get('sonata.core.flashmessage.twig.extension'));
        $instance->addExtension($this->get('sonata.core.twig.extension.text'));
        $instance->addExtension($this->get('sonata.core.twig.status_extension'));
        $instance->addExtension($this->get('sonata.core.twig.template_extension'));
        $instance->addExtension($this->get('sonata.admin.twig.extension'));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension($this->get('sonata.block.templating.helper')));
        $instance->addExtension(new \Vich\UploaderBundle\Twig\Extension\UploaderExtension($this->get('vich_uploader.templating.helper.uploader_helper')));
        $instance->addExtension($this->get('ivory_ck_editor.twig_extension'));
        $instance->addExtension($this->get('twig.extension.fm_tinymce_init'));
        $instance->addExtension(new \HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension($this->get('hwi_oauth.templating.helper.oauth')));
        $instance->addGlobal('app', $this->get('templating.globals'));
        $instance->addGlobal('app_name', 'switchfit');
        $instance->addGlobal('sonata_user', $this->get('sonata.user.twig.global'));
        $instance->addGlobal('sonata_block', $this->get('sonata.block.twig.global'));
        return $instance;
    }
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false);
    }
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTwig_Extension_FmTinymceInitService()
    {
        return $this->services['twig.extension.fm_tinymce_init'] = new \FM\ElfinderBundle\Twig\Extension\FMElfinderTinymceExtension($this->get('twig'));
    }
    protected function getTwig_Extension_IntlService()
    {
        return $this->services['twig.extension.intl'] = new \Twig_Extensions_Extension_Intl();
    }
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/snc/redis-bundle/Snc/RedisBundle/Resources/views'), 'SncRedis');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/sonata-project/user-bundle/Resources/views'), 'SonataUser');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/src/Nordcode/UserBundle/Resources/views'), 'NordcodeUser');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/jms/payment-core-bundle/JMS/Payment/CoreBundle/Resources/views'), 'JMSPaymentCore');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/src/Nordcode/GeoBundle/Resources/views'), 'NordcodeGeo');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views'), 'NelmioApiDoc');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/sonata-project/core-bundle/Resources/views'), 'SonataCore');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/sonata-project/admin-bundle/Resources/views'), 'SonataAdmin');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views'), 'SonataDoctrineORMAdmin');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/sonata-project/block-bundle/Resources/views'), 'SonataBlock');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/mmoreram/rsqueue-bundle/Mmoreram/RSQueueBundle/Resources/views'), 'RSQueue');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/willdurand/js-translation-bundle/Bazinga/Bundle/JsTranslationBundle/Resources/views'), 'BazingaJsTranslation');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/egeloen/ckeditor-bundle/Resources/views'), 'IvoryCKEditor');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/helios-ag/fm-elfinder-bundle/FM/ElfinderBundle/Resources/views'), 'FMElfinder');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/src/Nordcode/AdminBundle/Resources/views'), 'NordcodeAdmin');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/src/Nordcode/SwitchfitBundle/Resources/views'), 'NordcodeSwitchfit');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/src/Nordcode/ApiDocBundle/Resources/views'), 'NordcodeApiDoc');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/src/Nordcode/UploaderBundle/Resources/views'), 'NordcodeUploader');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/src/Nordcode/NotificationBundle/Resources/views'), 'NordcodeNotification');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/src/Nordcode/AdminPageBoardBundle/Resources/views'), 'NordcodeAdminPageBoard');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/src/Nordcode/SignupBundle/Resources/views'), 'NordcodeSignup');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/hwi/oauth-bundle/HWI/Bundle/OAuthBundle/Resources/views'), 'HWIOAuth');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/src/Nordcode/TippsBundle/Resources/views'), 'NordcodeTipps');
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));
        $instance->addPath(($this->targetDirs[4].'/repo/branch/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));
        return $instance;
    }
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('871e380fa4b9514cabeb1317e15b1ad0');
    }
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), $this->get('validator.validator_factory'), $this->get('translator.default'), 'validators', array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('nordcode_user.user_manager'))));
    }
    protected function getVichUploader_AdapterService()
    {
        return $this->services['vich_uploader.adapter'] = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();
    }
    protected function getVichUploader_FileInjectorService()
    {
        return $this->services['vich_uploader.file_injector'] = new \Vich\UploaderBundle\Injector\FileInjector($this->get('vich_uploader.property_mapping_factory'), $this->get('vich_uploader.storage'));
    }
    protected function getVichUploader_Listener_Uploader_PropelService()
    {
        return $this->services['vich_uploader.listener.uploader.propel'] = new \Vich\UploaderBundle\EventListener\PropelUploaderListener($this->get('vich_uploader.adapter'), $this->get('vich_uploader.upload_handler'));
    }
    protected function getVichUploader_NamerOrignameService()
    {
        return $this->services['vich_uploader.namer_origname'] = new \Vich\UploaderBundle\Naming\OrignameNamer();
    }
    protected function getVichUploader_NamerUniqidService()
    {
        return $this->services['vich_uploader.namer_uniqid'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }
    protected function getVichUploader_StorageService()
    {
        return $this->services['vich_uploader.storage'] = $this->get('vich_uploader.storage_factory')->createStorage();
    }
    protected function getVichUploader_Storage_FileSystemService()
    {
        return $this->services['vich_uploader.storage.file_system'] = new \Vich\UploaderBundle\Storage\FileSystemStorage($this->get('vich_uploader.property_mapping_factory'));
    }
    protected function getVichUploader_Storage_GaufretteService()
    {
        return $this->services['vich_uploader.storage.gaufrette'] = new \Vich\UploaderBundle\Storage\GaufretteStorage($this->get('vich_uploader.property_mapping_factory'), $this->get('knp_gaufrette.filesystem_map'), 'gaufrette');
    }
    protected function getVichUploader_StorageFactoryService()
    {
        return $this->services['vich_uploader.storage_factory'] = new \Vich\UploaderBundle\Storage\StorageFactory($this);
    }
    protected function getVichUploader_Templating_Helper_UploaderHelperService()
    {
        return $this->services['vich_uploader.templating.helper.uploader_helper'] = new \Vich\UploaderBundle\Templating\Helper\UploaderHelper($this->get('vich_uploader.storage'));
    }
    protected function getVichUploader_UploadHandlerService()
    {
        return $this->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler($this->get('vich_uploader.storage'), $this->get('vich_uploader.file_injector'));
    }
    protected function synchronizeRequestService()
    {
        if ($this->initialized('locale_listener')) {
            $this->get('locale_listener')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('fragment.handler')) {
            $this->get('fragment.handler')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('router_listener')) {
            $this->get('router_listener')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('hwi_oauth.templating.helper.oauth')) {
            $this->get('hwi_oauth.templating.helper.oauth')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
    }
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[4].'/repo/branch/app/switchfit/../web'), false);
        $instance->addWorker(new \Assetic\Factory\Worker\EnsureFilterWorker('/\\.jpg$/', $this->get('assetic.filter.jpegoptim')));
        $instance->addWorker(new \Assetic\Factory\Worker\EnsureFilterWorker('/\\.png$/', $this->get('assetic.filter.optipng')));
        $instance->addWorker(new \Assetic\Factory\Worker\EnsureFilterWorker('/\\.coffee$/', $this->get('assetic.filter.coffee')));
        $instance->addWorker(new \Assetic\Factory\Worker\EnsureFilterWorker('/\\.less$/', $this->get('assetic.filter.less')));
        return $instance;
    }
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }
    protected function getFosUser_EntityManagerService()
    {
        return $this->services['fos_user.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }
    protected function getFosUser_UserProvider_UsernameEmailService()
    {
        return $this->services['fos_user.user_provider.username_email'] = new \FOS\UserBundle\Security\EmailUserProvider($this->get('nordcode_user.user_manager'));
    }
    protected function getJmsSerializer_MetadataFactoryService()
    {
        $this->services['jms_serializer.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);
        $instance->setCache(new \Metadata\Cache\FileCache((__DIR__.'/serializer')));
        return $instance;
    }
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_USER_NOT_PAID' => array(0 => 'ROLE_USER'), 'ROLE_USER_PAID' => array(0 => 'ROLE_USER'), 'ROLE_USER_SENT_OUT_CONF_EMAIL' => array(0 => 'ROLE_USER'), 'ROLE_USER_REGISTER' => array(0 => 'ROLE_USER_NOT_PAID'), 'ROLE_USER_QUESTIONNAIRE' => array(0 => 'ROLE_USER_REGISTER'), 'ROLE_USER_APP' => array(0 => 'ROLE_USER_QUESTIONNAIRE'), 'ROLE_USER_ACTIVE_COURSE' => array(0 => 'ROLE_USER_APP'), 'ROLE_ADMIN' => array(0 => 'ROLE_USER_ACTIVE_COURSE'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_SONATA_ADMIN', 2 => 'ROLE_ADMIN', 3 => 'ROLE_ALLOWED_TO_SWITCH')))), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver'))), 'affirmative', false, true);
    }
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.context'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'));
    }
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/connect'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/logout$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login-check$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register/confirm'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), array(0 => 'ROLE_USER_REGISTER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/promo'), array(0 => 'ROLE_USER_REGISTER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/confirmed$'), array(0 => 'ROLE_USER_REGISTER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/questionnaire'), array(0 => 'ROLE_USER_QUESTIONNAIRE'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/additional'), array(0 => 'ROLE_USER_QUESTIONNAIRE'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/success'), array(0 => 'ROLE_USER_APP'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/logout$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login-check$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/payment/notify'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/payment'), array(0 => 'ROLE_USER_REGISTER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/'), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_SONATA_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/doc'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/.*'), array(0 => 'ROLE_USER_APP'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/.*'), array(0 => 'ROLE_USER_APP'), NULL);
        return $instance;
    }
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('fos_user.user_provider.username_email');
        $b = $this->get('hwi_oauth.user_checker');
        $c = $this->get('security.encoder_factory');
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'admin', $c, true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5610443b3af9f'), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'main', $c, true), 3 => new \HWI\Bundle\OAuthBundle\Security\Core\Authentication\Provider\OAuthProvider($this->get('nordcode_user.oauth_fos_user_provider'), $this->get('hwi_oauth.resource_ownermap.main'), $b), 4 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5610443b3af9f')), true);
        $instance->setEventDispatcher($this->get('event_dispatcher'));
        return $instance;
    }
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }
    protected function getSecurity_Logout_Handler_SessionService()
    {
        return $this->services['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler();
    }
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, false, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->add('sonata.user.block.menu', 'sonata.user.block.menu', array());
        $instance->add('sonata.user.block.account', 'sonata.user.block.account', array());
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list', array(0 => 'admin'));
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result', array());
        $instance->add('sonata.block.service.container', 'sonata.block.service.container', array());
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty', array());
        $instance->add('sonata.block.service.text', 'sonata.block.service.text', array(0 => 'admin'));
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss', array());
        $instance->add('sonata.block.service.menu', 'sonata.block.service.menu', array());
        $instance->add('sonata.block.service.template', 'sonata.block.service.template', array());
        $instance->add('nordcode_user.admin.block.user_main_data', 'nordcode_user.admin.block.user_main_data', array());
        $instance->add('nordcode_user.admin.block.user_course', 'nordcode_user.admin.block.user_course', array());
        $instance->add('nordcode_user.admin.block.user_course_health', 'nordcode_user.admin.block.user_course_health', array());
        $instance->add('nordcode_user.admin.block.user_course_weekly', 'nordcode_user.admin.block.user_course_weekly', array());
        $instance->add('nordcode_user.admin.block.user_academy', 'nordcode_user.admin.block.user_academy', array());
        $instance->add('nordcode_user.admin.block.meal_favorite', 'nordcode_user.admin.block.meal_favorite', array());
        $instance->add('nordcode_user.admin.block.workout_favorite', 'nordcode_user.admin.block.workout_favorite', array());
        $instance->add('nordcode_user.admin.block.diary_entries', 'nordcode_user.admin.block.diary_entries', array());
        return $instance;
    }
    protected function getStofDoctrineExtensions_Listener_TranslatableService()
    {
        $this->services['stof_doctrine_extensions.listener.translatable'] = $instance = new \Gedmo\Translatable\TranslatableListener();
        $instance->setAnnotationReader($this->get('annotation_reader'));
        $instance->setDefaultLocale('en_US');
        $instance->setTranslatableLocale('en_US');
        $instance->setTranslationFallback(false);
        $instance->setPersistDefaultLocaleTranslation(false);
        $instance->setSkipOnLoad(false);
        return $instance;
    }
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml'), 2 => ($this->targetDirs[4].'/repo/branch/src/Nordcode/UserBundle/Resources/config/validation.xml'), 3 => ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/storage-validation/orm.xml'))), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->services['validator.validator_factory'] = new \Nordcode\RestBundle\Validator\ConstraintValidatorFactory($this, array('security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'sonata.admin.validator.inline' => 'sonata.admin.validator.inline'));
    }
    protected function getVichUploader_MetadataReaderService()
    {
        $a = new \Vich\UploaderBundle\Metadata\Driver\FileLocator(array());
        $b = new \Metadata\MetadataFactory(new \Vich\UploaderBundle\Metadata\Driver\ChainDriver(array(0 => new \Vich\UploaderBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')), 1 => new \Vich\UploaderBundle\Metadata\Driver\YamlDriver($a), 2 => new \Vich\UploaderBundle\Metadata\Driver\XmlDriver($a))));
        $b->setCache(new \Metadata\Cache\FileCache((__DIR__.'/vich_uploader')));
        return $this->services['vich_uploader.metadata_reader'] = new \Vich\UploaderBundle\Metadata\MetadataReader($b);
    }
    protected function getVichUploader_PropertyMappingFactoryService()
    {
        return $this->services['vich_uploader.property_mapping_factory'] = new \Vich\UploaderBundle\Mapping\PropertyMappingFactory($this, $this->get('vich_uploader.metadata_reader'), $this->get('vich_uploader.adapter'), array('meal_photo_image' => array('uri_prefix' => '/media/images/ref/meal', 'upload_destination' => 'meal_image_fs', 'namer' => 'nordcode_uploader.namer_uniqid', 'delete_on_remove' => true, 'inject_on_load' => true, 'directory_namer' => NULL, 'delete_on_update' => true), 'quest_photo_image' => array('uri_prefix' => '/media/images/ref/quest', 'upload_destination' => 'quest_image_fs', 'namer' => 'nordcode_uploader.namer_uniqid', 'delete_on_remove' => true, 'inject_on_load' => true, 'directory_namer' => NULL, 'delete_on_update' => true), 'workout_photo_image' => array('uri_prefix' => '/media/images/ref/workout', 'upload_destination' => 'workout_image_fs', 'namer' => 'nordcode_uploader.namer_uniqid', 'delete_on_remove' => true, 'inject_on_load' => true, 'directory_namer' => NULL, 'delete_on_update' => true), 'user_picture' => array('uri_prefix' => '/media/images/ref/user', 'upload_destination' => 'user_picture_fs', 'namer' => 'nordcode_uploader.namer_uniqid', 'delete_on_remove' => true, 'inject_on_load' => true, 'delete_on_update' => true, 'directory_namer' => NULL), 'diary_picture' => array('uri_prefix' => '/media/images/ref/diary', 'upload_destination' => 'diary_picture_fs', 'namer' => 'nordcode_uploader.namer_uniqid', 'delete_on_remove' => true, 'inject_on_load' => true, 'delete_on_update' => true, 'directory_namer' => NULL), 'sf_life_header' => array('uri_prefix' => '/media/images/ref/sflife', 'upload_destination' => 'sf_life_header_fs', 'namer' => 'nordcode_uploader.namer_uniqid', 'delete_on_remove' => true, 'inject_on_load' => true, 'delete_on_update' => true, 'directory_namer' => NULL), 'sf_life_video_preview' => array('uri_prefix' => '/media/images/ref/sflife', 'upload_destination' => 'sf_life_video_preview_fs', 'namer' => 'nordcode_uploader.namer_uniqid', 'delete_on_remove' => true, 'inject_on_load' => true, 'delete_on_update' => true, 'directory_namer' => NULL), 'city_image' => array('uri_prefix' => '/media/images/ref/city', 'upload_destination' => 'city_image_fs', 'namer' => 'nordcode_uploader.namer_uniqid', 'delete_on_remove' => true, 'inject_on_load' => true, 'delete_on_update' => true, 'directory_namer' => NULL)));
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        $name = strtolower($name);
        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => ($this->targetDirs[4].'/repo/branch/app/switchfit'),
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'switchfit',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[4].'/logs/sf/switchfit'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SncRedisBundle' => 'Snc\\RedisBundle\\SncRedisBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle',
                'NordcodeUserBundle' => 'Nordcode\\UserBundle\\NordcodeUserBundle',
                'JMSPaymentCoreBundle' => 'JMS\\Payment\\CoreBundle\\JMSPaymentCoreBundle',
                'NordcodeHelperBundle' => 'Nordcode\\HelperBundle\\NordcodeHelperBundle',
                'NordcodeCoreBundle' => 'Nordcode\\CoreBundle\\NordcodeCoreBundle',
                'NordcodeGeoBundle' => 'Nordcode\\GeoBundle\\NordcodeGeoBundle',
                'NordcodePaymentSkrillBundle' => 'Nordcode\\PaymentSkrillBundle\\NordcodePaymentSkrillBundle',
                'NordcodeTranslationBundle' => 'Nordcode\\TranslationBundle\\NordcodeTranslationBundle',
                'NordcodeLoggerBundle' => 'Nordcode\\LoggerBundle\\NordcodeLoggerBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'NelmioApiDocBundle' => 'Nelmio\\ApiDocBundle\\NelmioApiDocBundle',
                'SonatajQueryBundle' => 'Sonata\\jQueryBundle\\SonatajQueryBundle',
                'SonataCoreBundle' => 'Sonata\\CoreBundle\\SonataCoreBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'KnpGaufretteBundle' => 'Knp\\Bundle\\GaufretteBundle\\KnpGaufretteBundle',
                'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle',
                'RSQueueBundle' => 'Mmoreram\\RSQueueBundle\\RSQueueBundle',
                'BazingaJsTranslationBundle' => 'Bazinga\\Bundle\\JsTranslationBundle\\BazingaJsTranslationBundle',
                'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle',
                'FMElfinderBundle' => 'FM\\ElfinderBundle\\FMElfinderBundle',
                'NordcodeAdminBundle' => 'Nordcode\\AdminBundle\\NordcodeAdminBundle',
                'NordcodeRestBundle' => 'Nordcode\\RestBundle\\NordcodeRestBundle',
                'NordcodeSwitchfitBundle' => 'Nordcode\\SwitchfitBundle\\NordcodeSwitchfitBundle',
                'NordcodeApiDocBundle' => 'Nordcode\\ApiDocBundle\\NordcodeApiDocBundle',
                'NordcodeUploaderBundle' => 'Nordcode\\UploaderBundle\\NordcodeUploaderBundle',
                'NordcodeAcademyBundle' => 'Nordcode\\AcademyBundle\\NordcodeAcademyBundle',
                'NordcodeNotificationBundle' => 'Nordcode\\NotificationBundle\\NordcodeNotificationBundle',
                'NordcodeQABundle' => 'Nordcode\\QABundle\\NordcodeQABundle',
                'NordcodeAdminPageBoardBundle' => 'Nordcode\\AdminPageBoardBundle\\NordcodeAdminPageBoardBundle',
                'NordcodeQuestBundle' => 'Nordcode\\QuestBundle\\NordcodeQuestBundle',
                'NordcodePointBundle' => 'Nordcode\\PointBundle\\NordcodePointBundle',
                'NordcodeSignupBundle' => 'Nordcode\\SignupBundle\\NordcodeSignupBundle',
                'HWIOAuthBundle' => 'HWI\\Bundle\\OAuthBundle\\HWIOAuthBundle',
                'NordcodeTippsBundle' => 'Nordcode\\TippsBundle\\NordcodeTippsBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'switchfitProdProjectContainer',
            'kernel.server_conf_dir' => ($this->targetDirs[4].'/conf'),
            'kernel.server_media_dir' => ($this->targetDirs[4].'/media'),
            'kernel.server_env' => 'server_dev',
            'db_driver' => 'pdo_pgsql',
            'db_host' => '127.0.0.1',
            'db_port' => 5432,
            'db_user' => 'switchfit',
            'db_name' => 'switchfit',
            'db_password' => 'switchfit',
            'server.session.domain' => '.switchfit.lo',
            'server.host.landing' => 'signup.switchfit.lo',
            'server.host.app' => 'app.switchfit.lo',
            'server.redis_dsn.cache' => 'redis://localhost/5',
            'server.redis_dsn.session' => 'redis://localhost/6',
            'server.redis_dsn.mailer_spool' => 'redis://localhost/7',
            'server.redis_queue.host' => 'localhost',
            'server.redis_queue.port' => 6379,
            'server.redis_queue.database' => 8,
            'server.node.bin' => '/usr/bin/node',
            'server.node.paths' => array(
                0 => '/usr/lib/node_modules',
            ),
            'server.uglifyjs2.bin' => '/usr/bin/uglifyjs',
            'server.uglifycss.bin' => '/usr/bin/uglifycss',
            'server.coffee.bin' => '/usr/bin/coffee',
            'server.less.bin' => '/usr/bin/lessc',
            'server.mailer.transport' => 'smtp',
            'server.mailer.encryption' => 'ssl',
            'server.mailer.auth_mode' => 'login',
            'server.mailer.port' => 465,
            'server.mailer.host' => 'smtp.gmail.com',
            'server.mailer.user' => 'team@switchfit.io',
            'server.mailer.password' => 'goswtichfit1991',
            'server.mailer.delivery_address' => 'kim@wuestkamp.com',
            'server.payment.skrill.email' => 'kimskrillbusiness@wuestkamp.com',
            'server.payment.skrill.password' => '123Lolchen',
            'server.payment.skrill.secret_word' => 123456,
            'server.oauth.facebook.client_id' => 139200083077684,
            'server.oauth.facebook.client_secret' => 'ce9dd5da470b19ddd2b0b04e8536a598',
            'rss.channels' => array(
                0 => 'http://feeds.feedburner.com/allscandinavian?format=xml',
            ),
            'switchfit_driver' => 'pdo_pgsql',
            'switchfit_host' => '127.0.0.1',
            'switchfit_port' => 5432,
            'switchfit_name' => 'switchfit',
            'switchfit_user' => 'switchfit',
            'switchfit_password' => 'switchfit',
            'locale' => 'de',
            'secret' => '871e380fa4b9514cabeb1317e15b1ad0',
            'sonata.user.admin.user.class' => 'Nordcode\\UserBundle\\Admin\\UserAdmin',
            'sonata_admin.title' => 'SwitchFit',
            'sonata_admin.logo_title' => '/bundles/nordcodeadmin/img/logo_admin.png',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'debug.errors_logger_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener',
            'kernel.secret' => '871e380fa4b9514cabeb1317e15b1ad0',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(
            ),
            'kernel.trusted_proxies' => array(
            ),
            'kernel.default_locale' => 'de',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'name' => 'switchfit_sessid',
                'cookie_domain' => '.switchfit.lo',
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'form.csrf_provider.class' => 'Symfony\\Component\\Form\\Extension\\Csrf\\CsrfProvider\\SessionCsrfProvider',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => ($this->targetDirs[4].'/repo/branch/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'),
                1 => ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml'),
                2 => ($this->targetDirs[4].'/repo/branch/src/Nordcode/UserBundle/Resources/config/validation.xml'),
                3 => ($this->targetDirs[4].'/repo/branch/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/storage-validation/orm.xml'),
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(
            ),
            'validator.translation_domain' => 'validators',
            'data_collector.templates' => array(
            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'switchfitProdUrlMatcher',
            'router.options.generator.cache_class' => 'switchfitProdUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[4].'/repo/branch/app/switchfit/config/routing.yml'),
            'router.cache_class_prefix' => 'switchfitProd',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'hwi_oauth.resource_ownermap.configured.main' => array(
                'facebook' => '/connect/check-facebook',
            ),
            'security.role_hierarchy.roles' => array(
                'ROLE_USER_NOT_PAID' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_USER_PAID' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_USER_SENT_OUT_CONF_EMAIL' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_USER_REGISTER' => array(
                    0 => 'ROLE_USER_NOT_PAID',
                ),
                'ROLE_USER_QUESTIONNAIRE' => array(
                    0 => 'ROLE_USER_REGISTER',
                ),
                'ROLE_USER_APP' => array(
                    0 => 'ROLE_USER_QUESTIONNAIRE',
                ),
                'ROLE_USER_ACTIVE_COURSE' => array(
                    0 => 'ROLE_USER_APP',
                ),
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER_ACTIVE_COURSE',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_SONATA_ADMIN',
                    2 => 'ROLE_ADMIN',
                    3 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => 'SonataUserBundle:Form:form_admin_fields.html.twig',
                3 => 'NordcodeUploaderBundle:Form:fields.html.twig',
            ),
            'twig.options' => array(
                'debug' => false,
                'strict_variables' => false,
                'exception_controller' => 'twig.controller.exception:showAction',
                'autoescape' => array(
                    0 => 'Symfony\\Bundle\\TwigBundle\\TwigDefaultEscapingStrategy',
                    1 => 'guess',
                ),
                'cache' => (__DIR__.'/twig'),
                'charset' => 'UTF-8',
                'paths' => array(
                ),
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handlers_to_channels' => array(
                'monolog.handler.main' => NULL,
            ),
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(
                0 => '/usr/lib/node_modules',
            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'FrameworkBundle',
                1 => 'SecurityBundle',
                2 => 'TwigBundle',
                3 => 'MonologBundle',
                4 => 'AsseticBundle',
                5 => 'SwiftmailerBundle',
                6 => 'JMSSerializerBundle',
                7 => 'DoctrineBundle',
                8 => 'StofDoctrineExtensionsBundle',
                9 => 'KnpMenuBundle',
                10 => 'SncRedisBundle',
                11 => 'FOSUserBundle',
                12 => 'SonataUserBundle',
                13 => 'NordcodeUserBundle',
                14 => 'JMSPaymentCoreBundle',
                15 => 'NordcodeHelperBundle',
                16 => 'NordcodeCoreBundle',
                17 => 'NordcodeGeoBundle',
                18 => 'NordcodePaymentSkrillBundle',
                19 => 'NordcodeTranslationBundle',
                20 => 'NordcodeLoggerBundle',
                21 => 'DoctrineMigrationsBundle',
                22 => 'FOSRestBundle',
                23 => 'NelmioApiDocBundle',
                24 => 'SonatajQueryBundle',
                25 => 'SonataCoreBundle',
                26 => 'SonataAdminBundle',
                27 => 'SonataDoctrineORMAdminBundle',
                28 => 'SonataBlockBundle',
                29 => 'KnpGaufretteBundle',
                30 => 'VichUploaderBundle',
                31 => 'RSQueueBundle',
                32 => 'BazingaJsTranslationBundle',
                33 => 'IvoryCKEditorBundle',
                34 => 'FMElfinderBundle',
                35 => 'NordcodeAdminBundle',
                36 => 'NordcodeRestBundle',
                37 => 'NordcodeSwitchfitBundle',
                38 => 'NordcodeApiDocBundle',
                39 => 'NordcodeUploaderBundle',
                40 => 'NordcodeAcademyBundle',
                41 => 'NordcodeNotificationBundle',
                42 => 'NordcodeQABundle',
                43 => 'NordcodeAdminPageBoardBundle',
                44 => 'NordcodeQuestBundle',
                45 => 'NordcodePointBundle',
                46 => 'NordcodeSignupBundle',
                47 => 'HWIOAuthBundle',
                48 => 'NordcodeTippsBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => ($this->targetDirs[4].'/repo/branch/app/switchfit/../web'),
            'assetic.write_to' => ($this->targetDirs[4].'/repo/branch/app/switchfit/../web'),
            'assetic.variables' => array(
            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.filter.jpegoptim.class' => 'Assetic\\Filter\\JpegoptimFilter',
            'assetic.filter.jpegoptim.bin' => ($this->targetDirs[4].'/repo/branch/app/switchfit/bin/image_optim/jpegoptim'),
            'assetic.filter.jpegoptim.timeout' => NULL,
            'assetic.filter.jpegoptim.strip_all' => false,
            'assetic.filter.jpegoptim.max' => NULL,
            'assetic.filter.optipng.class' => 'Assetic\\Filter\\OptiPngFilter',
            'assetic.filter.optipng.bin' => ($this->targetDirs[4].'/repo/branch/app/switchfit/bin/image_optim/optipng'),
            'assetic.filter.optipng.timeout' => NULL,
            'assetic.filter.optipng.level' => NULL,
            'assetic.filter.uglifyjs2.class' => 'Assetic\\Filter\\UglifyJs2Filter',
            'assetic.filter.uglifyjs2.bin' => '/usr/bin/uglifyjs',
            'assetic.filter.uglifyjs2.node' => '/usr/bin/node',
            'assetic.filter.uglifyjs2.timeout' => NULL,
            'assetic.filter.uglifyjs2.node_paths' => array(
                0 => '/usr/lib/node_modules',
            ),
            'assetic.filter.uglifyjs2.compress' => false,
            'assetic.filter.uglifyjs2.beautify' => false,
            'assetic.filter.uglifyjs2.mangle' => false,
            'assetic.filter.uglifycss.class' => 'Assetic\\Filter\\UglifyCssFilter',
            'assetic.filter.uglifycss.bin' => '/usr/bin/uglifycss',
            'assetic.filter.uglifycss.node' => '/usr/bin/node',
            'assetic.filter.uglifycss.timeout' => NULL,
            'assetic.filter.uglifycss.node_paths' => array(
                0 => '/usr/lib/node_modules',
            ),
            'assetic.filter.uglifycss.expand_vars' => false,
            'assetic.filter.uglifycss.ugly_comments' => false,
            'assetic.filter.uglifycss.cute_comments' => false,
            'assetic.filter.coffee.class' => 'Assetic\\Filter\\CoffeeScriptFilter',
            'assetic.filter.coffee.bin' => '/usr/bin/coffee',
            'assetic.filter.coffee.node' => '/usr/bin/node',
            'assetic.filter.coffee.timeout' => NULL,
            'assetic.filter.coffee.node_paths' => array(
                0 => '/usr/lib/node_modules',
            ),
            'assetic.filter.coffee.bare' => NULL,
            'assetic.filter.less.class' => 'Assetic\\Filter\\LessFilter',
            'assetic.filter.less.node' => '/usr/bin/node',
            'assetic.filter.less.node_paths' => array(
                0 => '/usr/lib/node_modules',
            ),
            'assetic.filter.less.timeout' => NULL,
            'assetic.filter.less.compress' => NULL,
            'assetic.filter.less.bin' => '/usr/bin/lessc',
            'assetic.twig_extension.functions' => array(
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => 'ssl',
            'swiftmailer.mailer.default.transport.smtp.port' => 465,
            'swiftmailer.mailer.default.transport.smtp.host' => 'smtp.gmail.com',
            'swiftmailer.mailer.default.transport.smtp.username' => 'team@switchfit.io',
            'swiftmailer.mailer.default.transport.smtp.password' => 'goswtichfit1991',
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => 'login',
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.sender_address' => 'team@switchfit.io',
            'swiftmailer.sender_address' => 'team@switchfit.io',
            'swiftmailer.mailer.default.single_address' => 'kim@wuestkamp.com',
            'swiftmailer.mailer.default.delivery_whitelist' => array(
            ),
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => 'kim@wuestkamp.com',
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(
                0 => '<!DOCTYPE authorized SYSTEM "http://some_url">',
            ),
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.infer_types_from_doctrine_metadata' => true,
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'switchfit' => 'doctrine.orm.switchfit_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'switchfit',
            'doctrine.dbal.connection_factory.types' => array(
                'json' => array(
                    'class' => 'Sonata\\Doctrine\\Types\\JsonType',
                    'commented' => true,
                ),
            ),
            'doctrine.connections' => array(
                'switchfit' => 'doctrine.dbal.switchfit_connection',
            ),
            'doctrine.default_connection' => 'switchfit',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'en_US',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'knp_menu.factory.class' => 'Knp\\Menu\\Silex\\RouterAwareFactory',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(
            ),
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(
            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'snc_redis.client.class' => 'Predis\\Client',
            'snc_redis.client_options.class' => 'Predis\\Option\\ClientOptions',
            'snc_redis.connection_parameters.class' => 'Predis\\Connection\\ConnectionParameters',
            'snc_redis.connection_factory.class' => 'Snc\\RedisBundle\\Client\\Predis\\Connection\\ConnectionFactory',
            'snc_redis.connection_wrapper.class' => 'Snc\\RedisBundle\\Client\\Predis\\Connection\\ConnectionWrapper',
            'snc_redis.phpredis_client.class' => 'Redis',
            'snc_redis.phpredis_connection_wrapper.class' => 'Snc\\RedisBundle\\Client\\Phpredis\\Client',
            'snc_redis.logger.class' => 'Snc\\RedisBundle\\Logger\\RedisLogger',
            'snc_redis.data_collector.class' => 'Snc\\RedisBundle\\DataCollector\\RedisDataCollector',
            'snc_redis.doctrine_cache.class' => 'Snc\\RedisBundle\\Doctrine\\Cache\\RedisCache',
            'snc_redis.monolog_handler.class' => 'Snc\\RedisBundle\\Monolog\\Handler\\RedisHandler',
            'snc_redis.swiftmailer_spool.class' => 'Snc\\RedisBundle\\SwiftMailer\\RedisSpool',
            'snc_redis.session.handler.class' => 'Snc\\RedisBundle\\Session\\Storage\\Handler\\RedisSessionHandler',
            'snc_redis.session.client' => 'session',
            'snc_redis.session.prefix' => 'switchfit',
            'snc_redis.session.locking' => true,
            'snc_redis.session.spin_lock_wait' => 150000,
            'fos_user.validator.password.class' => 'FOS\\UserBundle\\Validator\\PasswordValidator',
            'fos_user.validator.unique.class' => 'FOS\\UserBundle\\Validator\\UniqueValidator',
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\Security\\InteractiveLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'NordcodeUserBundle:Landing/Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Nordcode\\UserBundle\\Entity\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.profile.form.type' => 'fos_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'team@switchfit.io' => 'SwitchFit',
            ),
            'fos_user.registration.confirmation.enabled' => true,
            'fos_user.registration.form.type' => 'nordcode_user_registration_sign_b_form_type',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'RegistrationStep2',
            ),
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'team@switchfit.io' => 'SwitchFit',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => '',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'Nordcode\\UserBundle\\Entity\\Group',
            'fos_user.group.form.type' => 'fos_user_group',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'sonata.user.admin.groupname' => 'sonata_user',
            'sonata.user.admin.group.class' => 'Sonata\\UserBundle\\Admin\\Entity\\GroupAdmin',
            'sonata.user.admin.user.entity' => 'Nordcode\\UserBundle\\Entity\\User',
            'sonata.user.admin.group.entity' => 'Nordcode\\UserBundle\\Entity\\Group',
            'sonata.user.admin.user.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.group.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.user.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.admin.group.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.impersonating' => false,
            'sonata.user.google.authenticator.enabled' => false,
            'sonata.user.profile.form.type' => 'sonata_user_profile',
            'sonata.user.profile.form.name' => 'sonata_user_profile_form',
            'sonata.user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'sonata.user.register.confirm.redirect_route' => 'sonata_user_profile_show',
            'sonata.user.register.confirm.redirect_route_params' => array(
            ),
            'sonata.user.configuration.profile_blocks' => array(
                0 => array(
                    'position' => 'left',
                    'settings' => array(
                        'content' => '<h2>Welcome!</h2> This is a sample user profile dashboard, feel free to override it in the configuration!',
                    ),
                    'type' => 'sonata.block.service.text',
                ),
            ),
            'sonata.user.registration.form.options' => array(
            ),
            'sonata.user.registration.form.type' => 'sonata_user_registration',
            'sonata.user.registration.form.name' => 'sonata_user_registration_form',
            'sonata.user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'nordcode_user.registration_form_type.class' => 'Nordcode\\UserBundle\\Form\\Landing\\Type\\RegistrationFormType',
            'nordcode_user.registration_form_handler.class' => 'Nordcode\\UserBundle\\Form\\Landing\\Handler\\RegistrationFormHandler',
            'nordcode_user.registration_sign_b_form_type.class' => 'Nordcode\\UserBundle\\Form\\Switchfit\\Type\\RegistrationFormType',
            'nordcode_user.registration_sign_b_form_handler.class' => 'Nordcode\\UserBundle\\Form\\Switchfit\\Handler\\RegistrationFormHandler',
            'nordcode_user.mailer_real_instance.class' => 'Swift_Mailer',
            'nordcode_user.mailer_real.class' => 'Nordcode\\UserBundle\\Mailer\\Mailer',
            'nordcode_user.mailer_spool.class' => 'Nordcode\\UserBundle\\Mailer\\MailerSpool',
            'nordcode_user.user_manager.class' => 'Nordcode\\UserBundle\\Entity\\UserManager',
            'nordcode_user.validator.userhasrole.class' => 'Nordcode\\UserBundle\\Validator\\UserHasRoleValidator',
            'nordcode_user.oauth_fos_user_provider.class' => 'Nordcode\\UserBundle\\Security\\Core\\User\\OAuthFOSUserProvider',
            'nordcode_user.security.authentication_handler.class' => 'Nordcode\\UserBundle\\Security\\AuthenticationHandler',
            'nordcode_user.security.logout_handler.class' => 'Nordcode\\UserBundle\\Security\\LogoutHandler',
            'payment.plugin_controller.entity.class' => 'JMS\\Payment\\CoreBundle\\PluginController\\EntityPluginController',
            'payment.plugin_controller.entity.options.result_class' => 'JMS\\Payment\\CoreBundle\\PluginController\\Result',
            'payment.plugin_controller.entity.options.payment_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Payment',
            'payment.plugin_controller.entity.options.payment_instruction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction',
            'payment.plugin_controller.entity.options.financial_transaction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\FinancialTransaction',
            'payment.plugin_controller.entity.options.credit_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Credit',
            'payment.form.choose_payment_method_type.class' => 'JMS\\Payment\\CoreBundle\\Form\\ChoosePaymentMethodType',
            'payment.encryption_service.class' => 'JMS\\Payment\\CoreBundle\\Cryptography\\MCryptEncryptionService',
            'payment.encryption_service.secret' => 'SWITCHFITPAYMENT2014',
            'payment.encryption_service.cipher' => 'rijndael-256',
            'payment.encryption_service.mode' => 'ctr',
            'nordcode_helper.form_errors_handler.class' => 'Nordcode\\HelperBundle\\Form\\FormErrorsHandler',
            'nordcode_core.course_manager.class' => 'Nordcode\\CoreBundle\\Entity\\Manager\\CourseManager',
            'nordcode_core.questionnaire_manager.class' => 'Nordcode\\CoreBundle\\Entity\\Manager\\QuestionnaireManager',
            'nordcode_core.contact_message_manager.class' => 'Nordcode\\CoreBundle\\Entity\\Manager\\ContactMessageManager',
            'nordcode_core.diary_manager.class' => 'Nordcode\\CoreBundle\\Entity\\Manager\\DiaryManager',
            'nordcode_core.meal_manager.class' => 'Nordcode\\CoreBundle\\Entity\\Manager\\MealManager',
            'nordcode_core.workout_manager.class' => 'Nordcode\\CoreBundle\\Entity\\Manager\\WorkoutManager',
            'nordcode_core.suggest_manager.class' => 'Nordcode\\CoreBundle\\Entity\\Manager\\SuggestManager',
            'nordcode_core.inspire_manager.class' => 'Nordcode\\CoreBundle\\Entity\\Manager\\InspireManager',
            'nordcode_core.sf_life.class' => 'Nordcode\\CoreBundle\\Entity\\Manager\\SFLifeManager',
            'nordcode_geo.city_manager.class' => 'Nordcode\\GeoBundle\\Entity\\Manager\\CityManager',
            'nordcode_geo.admin.city.class' => 'Nordcode\\GeoBundle\\Admin\\CityAdmin',
            'nordcode_geo.admin.country.class' => 'Nordcode\\GeoBundle\\Admin\\CountryAdmin',
            'nordcode_payment_skrill.logger.class' => 'Monolog\\Logger',
            'nordcode_payment_skrill.log_handler.class' => 'Monolog\\Handler\\StreamHandler',
            'nordcode_payment_skrill.gateway.class' => 'Nordcode\\PaymentSkrillBundle\\Gateway\\Gateway',
            'nordcode_payment_skrill.plugin.class' => 'Nordcode\\PaymentSkrillBundle\\Plugin\\SkrillPlugin',
            'nordcode_payment_skrill.status_callback.class' => 'Nordcode\\PaymentSkrillBundle\\Util\\StatusCallback',
            'nordcode_payment_skrill.form.skrill_type.class' => 'Nordcode\\PaymentSkrillBundle\\Form\\SkrillType',
            'nordcode_payment_skrill.email' => 'kimskrillbusiness@wuestkamp.com',
            'nordcode_payment_skrill.password' => '123Lolchen',
            'nordcode_payment_skrill.secret_word' => 123456,
            'nordcode_payment_skrill.recipient_description' => 'SwitchFit Course',
            'nordcode_payment_skrill.return_url_text' => 'Return to SwitchFit',
            'nordcode_payment_skrill.return_url_target' => 3,
            'nordcode_payment_skrill.cancel_url_target' => 3,
            'nordcode_payment_skrill.notify_url_route' => 'switchfit_signup_payment_notify',
            'nordcode_payment_skrill.return_url_route' => 'switchfit_signup_payment_success',
            'nordcode_payment_skrill.cancel_url_route' => 'switchfit_signup_payment_cancel',
            'nordcode_payment_skrill.logger' => true,
            'nordcode_translation.translatable_field.class' => 'Nordcode\\TranslationBundle\\Form\\Type\\TranslatedFieldType',
            'nordcode_translation.listener.translatable.class' => 'Nordcode\\TranslationBundle\\EventListener\\TranslatableListener',
            'nordcode_logger.logger.class' => 'Monolog\\Logger',
            'nordcode_logger.log_handler.class' => 'Monolog\\Handler\\StreamHandler',
            'doctrine_migrations.dir_name' => ($this->targetDirs[4].'/repo/branch/app/switchfit/migrations/switchfit'),
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'fos_rest.serializer.exclusion_strategy.version' => '',
            'fos_rest.serializer.exclusion_strategy.groups' => '',
            'fos_rest.view_handler.jsonp.callback_param' => '',
            'fos_rest.view.exception_wrapper_handler' => 'FOS\\RestBundle\\View\\ExceptionWrapperHandler',
            'fos_rest.view_handler.default.class' => 'FOS\\RestBundle\\View\\ViewHandler',
            'fos_rest.view_handler.jsonp.class' => 'FOS\\RestBundle\\View\\JsonpHandler',
            'fos_rest.routing.loader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteLoader',
            'fos_rest.routing.loader.yaml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestYamlCollectionLoader',
            'fos_rest.routing.loader.xml_collection.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestXmlCollectionLoader',
            'fos_rest.routing.loader.processor.class' => 'FOS\\RestBundle\\Routing\\Loader\\RestRouteProcessor',
            'fos_rest.routing.loader.reader.controller.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestControllerReader',
            'fos_rest.routing.loader.reader.action.class' => 'FOS\\RestBundle\\Routing\\Loader\\Reader\\RestActionReader',
            'fos_rest.format_negotiator.class' => 'FOS\\RestBundle\\Util\\FormatNegotiator',
            'fos_rest.inflector.class' => 'FOS\\RestBundle\\Util\\Inflector\\DoctrineInflector',
            'fos_rest.request_matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'fos_rest.request.param_fetcher.class' => 'FOS\\RestBundle\\Request\\ParamFetcher',
            'fos_rest.request.param_fetcher.reader.class' => 'FOS\\RestBundle\\Request\\ParamReader',
            'fos_rest.cache_dir' => (__DIR__.'/fos_rest'),
            'fos_rest.serializer.serialize_null' => false,
            'fos_rest.formats' => array(
                'json' => false,
            ),
            'fos_rest.default_engine' => 'twig',
            'fos_rest.force_redirects' => array(
                'html' => 302,
            ),
            'fos_rest.failed_validation' => 400,
            'fos_rest.empty_content' => 204,
            'fos_rest.serialize_null' => true,
            'fos_rest.view_response_listener.class' => 'FOS\\RestBundle\\EventListener\\ViewResponseListener',
            'fos_rest.view_response_listener.force_view' => true,
            'fos_rest.routing.loader.default_format' => 'json',
            'fos_rest.routing.loader.include_format' => false,
            'fos_rest.exception.codes' => array(
                'Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException' => 404,
                'Doctrine\\ORM\\OptimisticLockException' => 409,
            ),
            'fos_rest.exception.messages' => array(
                'Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException' => true,
            ),
            'fos_rest.decoder.json.class' => 'FOS\\RestBundle\\Decoder\\JsonDecoder',
            'fos_rest.decoder.jsontoform.class' => 'FOS\\RestBundle\\Decoder\\JsonToFormDecoder',
            'fos_rest.decoder.xml.class' => 'FOS\\RestBundle\\Decoder\\XmlDecoder',
            'fos_rest.decoder_provider.class' => 'FOS\\RestBundle\\Decoder\\ContainerDecoderProvider',
            'fos_rest.body_listener.class' => 'FOS\\RestBundle\\EventListener\\BodyListener',
            'fos_rest.throw_exception_on_unsupported_content_type' => false,
            'fos_rest.decoders' => array(
                'json' => 'fos_rest.decoder.json',
                'xml' => 'fos_rest.decoder.xml',
            ),
            'fos_rest.format_listener.class' => 'FOS\\RestBundle\\EventListener\\FormatListener',
            'fos_rest.version_listener.class' => 'FOS\\RestBundle\\EventListener\\VersionListener',
            'fos_rest.mime_type_listener.class' => 'FOS\\RestBundle\\EventListener\\MimeTypeListener',
            'fos_rest.mime_types' => array(
                'html' => array(
                    0 => 'text/html',
                ),
                'css' => array(
                    0 => 'text/css',
                ),
                'js' => array(
                    0 => 'application/javascript',
                ),
                'json' => array(
                    0 => 'application/json',
                    1 => 'application/x-json',
                    2 => 'application/vnd.example-com.foo+json',
                ),
                'xml' => array(
                    0 => 'application/xml',
                    1 => 'text/xml',
                ),
                'jpg' => 'image/jpeg',
                'png' => 'image/png',
            ),
            'fos_rest.param_fetcher_listener.class' => 'FOS\\RestBundle\\EventListener\\ParamFetcherListener',
            'fos_rest.param_fetcher_listener.set_params_as_attributes' => true,
            'fos_rest.converter.request_body.validation_errors_argument' => 'validationErrors',
            'nelmio_api_doc.motd.template' => 'NelmioApiDocBundle::Components/motd.html.twig',
            'nelmio_api_doc.exclude_sections' => array(
            ),
            'nelmio_api_doc.api_name' => 'SwitchFit API',
            'nelmio_api_doc.sandbox.enabled' => false,
            'nelmio_api_doc.sandbox.endpoint' => NULL,
            'nelmio_api_doc.sandbox.request_format.method' => 'format_param',
            'nelmio_api_doc.sandbox.accept_type' => NULL,
            'nelmio_api_doc.sandbox.body_format' => 'form',
            'nelmio_api_doc.sandbox.request_format.default_format' => 'json',
            'nelmio_api_doc.formatter.abstract_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\AbstractFormatter',
            'nelmio_api_doc.formatter.markdown_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\MarkdownFormatter',
            'nelmio_api_doc.formatter.simple_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SimpleFormatter',
            'nelmio_api_doc.formatter.html_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\HtmlFormatter',
            'nelmio_api_doc.sandbox.authentication' => NULL,
            'nelmio_api_doc.extractor.api_doc_extractor.class' => 'Nelmio\\ApiDocBundle\\Extractor\\ApiDocExtractor',
            'nelmio_api_doc.form.extension.description_form_type_extension.class' => 'Nelmio\\ApiDocBundle\\Form\\Extension\\DescriptionFormTypeExtension',
            'nelmio_api_doc.twig.extension.extra_markdown.class' => 'Nelmio\\ApiDocBundle\\Twig\\Extension\\MarkdownExtension',
            'nelmio_api_doc.doc_comment_extractor.class' => 'Nelmio\\ApiDocBundle\\Util\\DocCommentExtractor',
            'nelmio_api_doc.extractor.handler.fos_rest.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\FosRestHandler',
            'nelmio_api_doc.extractor.handler.jms_security.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\JmsSecurityExtraHandler',
            'nelmio_api_doc.extractor.handler.sensio_framework_extra.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\SensioFrameworkExtraHandler',
            'nelmio_api_doc.extractor.handler.phpdoc.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\PhpDocHandler',
            'sonata.core.flashmessage.manager.class' => 'Sonata\\CoreBundle\\FlashMessage\\FlashManager',
            'sonata.core.twig.extension.flashmessage.class' => 'Sonata\\CoreBundle\\Twig\\Extension\\FlashMessageExtension',
            'sonata.admin.configuration.templates' => array(
                'user_block' => 'NordcodeAdminBundle:Core:user_block.html.twig',
                'layout' => 'NordcodeAdminBundle::layout.html.twig',
                'ajax' => 'SonataAdminBundle::ajax_layout.html.twig',
                'list' => 'SonataAdminBundle:CRUD:list.html.twig',
                'show' => 'SonataAdminBundle:CRUD:show.html.twig',
                'edit' => 'SonataAdminBundle:CRUD:edit.html.twig',
                'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig',
                'search' => 'SonataAdminBundle:Core:search.html.twig',
                'preview' => 'SonataAdminBundle:CRUD:preview.html.twig',
                'history' => 'SonataAdminBundle:CRUD:history.html.twig',
                'acl' => 'SonataAdminBundle:CRUD:acl.html.twig',
                'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig',
                'action' => 'SonataAdminBundle:CRUD:action.html.twig',
                'select' => 'SonataAdminBundle:CRUD:list__select.html.twig',
                'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig',
                'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig',
                'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig',
                'delete' => 'SonataAdminBundle:CRUD:delete.html.twig',
                'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig',
                'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig',
                'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig',
                'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                'pager_links' => 'SonataAdminBundle:Pager:links.html.twig',
                'pager_results' => 'SonataAdminBundle:Pager:results.html.twig',
            ),
            'sonata.admin.configuration.admin_services' => array(
            ),
            'sonata.admin.configuration.dashboard_groups' => array(
            ),
            'sonata.admin.configuration.dashboard_blocks' => array(
                0 => array(
                    'position' => 'left',
                    'type' => 'sonata.admin.block.admin_list',
                    'settings' => array(
                    ),
                ),
            ),
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.information' => array(
                'EDIT' => array(
                    0 => 'EDIT',
                ),
                'LIST' => array(
                    0 => 'LIST',
                ),
                'CREATE' => array(
                    0 => 'CREATE',
                ),
                'VIEW' => array(
                    0 => 'VIEW',
                ),
                'DELETE' => array(
                    0 => 'DELETE',
                ),
                'EXPORT' => array(
                    0 => 'EXPORT',
                ),
                'OPERATOR' => array(
                    0 => 'OPERATOR',
                ),
                'MASTER' => array(
                    0 => 'MASTER',
                ),
            ),
            'sonata.admin.configuration.security.admin_permissions' => array(
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ),
            'sonata.admin.configuration.security.object_permissions' => array(
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ),
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => array(
                'admins' => array(
                ),
                'excludes' => array(
                ),
                'implements' => array(
                ),
                'extends' => array(
                ),
                'instanceof' => array(
                ),
            ),
            'sonata.admin.configuration.filters.persist' => false,
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => array(
                'types' => array(
                    'list' => array(
                        'array' => 'SonataAdminBundle:CRUD:list_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:list_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:list_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'textarea' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'email' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'identifier' => 'SonataAdminBundle:CRUD:list_string.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:list_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:list_url.html.twig',
                    ),
                    'show' => array(
                        'array' => 'SonataAdminBundle:CRUD:show_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:show_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:show_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:base_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:base_percent.html.twig',
                        'choice' => 'SonataAdminBundle:CRUD:show_choice.html.twig',
                        'url' => 'SonataAdminBundle:CRUD:show_url.html.twig',
                    ),
                ),
                'form' => array(
                    0 => 'NordcodeAdminBundle:Form:custom_form_admin_fields.html.twig',
                ),
                'filter' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig',
                ),
            ),
            'sonata.block.service.container.class' => 'Sonata\\BlockBundle\\Block\\Service\\ContainerBlockService',
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.service.menu.class' => 'Sonata\\BlockBundle\\Block\\Service\\MenuBlockService',
            'sonata.block.service.template.class' => 'Sonata\\BlockBundle\\Block\\Service\\TemplateBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata.block.container.types' => array(
                0 => 'sonata.block.service.container',
                1 => 'sonata.page.block.container',
                2 => 'cmf.block.container',
                3 => 'cmf.block.slideshow',
            ),
            'sonata_block.blocks' => array(
                'sonata.admin.block.admin_list' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(
                    ),
                ),
                'sonata.block.service.text' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(
                    ),
                ),
            ),
            'sonata_block.blocks_by_class' => array(
            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                    'sonata.block.service.text' => 'sonata.cache.noop',
                ),
            ),
            'knp_gaufrette.filesystem_map.class' => 'Knp\\Bundle\\GaufretteBundle\\FilesystemMap',
            'knp_gaufrette.stream_wrapper.protocol' => 'gaufrette',
            'knp_gaufrette.stream_wrapper.filesystems' => array(
            ),
            'vich_uploader.file_injector.class' => 'Vich\\UploaderBundle\\Injector\\FileInjector',
            'vich_uploader.mappings' => array(
                'meal_photo_image' => array(
                    'uri_prefix' => '/media/images/ref/meal',
                    'upload_destination' => 'meal_image_fs',
                    'namer' => 'nordcode_uploader.namer_uniqid',
                    'delete_on_remove' => true,
                    'inject_on_load' => true,
                    'directory_namer' => NULL,
                    'delete_on_update' => true,
                ),
                'quest_photo_image' => array(
                    'uri_prefix' => '/media/images/ref/quest',
                    'upload_destination' => 'quest_image_fs',
                    'namer' => 'nordcode_uploader.namer_uniqid',
                    'delete_on_remove' => true,
                    'inject_on_load' => true,
                    'directory_namer' => NULL,
                    'delete_on_update' => true,
                ),
                'workout_photo_image' => array(
                    'uri_prefix' => '/media/images/ref/workout',
                    'upload_destination' => 'workout_image_fs',
                    'namer' => 'nordcode_uploader.namer_uniqid',
                    'delete_on_remove' => true,
                    'inject_on_load' => true,
                    'directory_namer' => NULL,
                    'delete_on_update' => true,
                ),
                'user_picture' => array(
                    'uri_prefix' => '/media/images/ref/user',
                    'upload_destination' => 'user_picture_fs',
                    'namer' => 'nordcode_uploader.namer_uniqid',
                    'delete_on_remove' => true,
                    'inject_on_load' => true,
                    'delete_on_update' => true,
                    'directory_namer' => NULL,
                ),
                'diary_picture' => array(
                    'uri_prefix' => '/media/images/ref/diary',
                    'upload_destination' => 'diary_picture_fs',
                    'namer' => 'nordcode_uploader.namer_uniqid',
                    'delete_on_remove' => true,
                    'inject_on_load' => true,
                    'delete_on_update' => true,
                    'directory_namer' => NULL,
                ),
                'sf_life_header' => array(
                    'uri_prefix' => '/media/images/ref/sflife',
                    'upload_destination' => 'sf_life_header_fs',
                    'namer' => 'nordcode_uploader.namer_uniqid',
                    'delete_on_remove' => true,
                    'inject_on_load' => true,
                    'delete_on_update' => true,
                    'directory_namer' => NULL,
                ),
                'sf_life_video_preview' => array(
                    'uri_prefix' => '/media/images/ref/sflife',
                    'upload_destination' => 'sf_life_video_preview_fs',
                    'namer' => 'nordcode_uploader.namer_uniqid',
                    'delete_on_remove' => true,
                    'inject_on_load' => true,
                    'delete_on_update' => true,
                    'directory_namer' => NULL,
                ),
                'city_image' => array(
                    'uri_prefix' => '/media/images/ref/city',
                    'upload_destination' => 'city_image_fs',
                    'namer' => 'nordcode_uploader.namer_uniqid',
                    'delete_on_remove' => true,
                    'inject_on_load' => true,
                    'delete_on_update' => true,
                    'directory_namer' => NULL,
                ),
            ),
            'vich_uploader.driver' => 'orm',
            'vich_uploader.storage_service' => 'nordcode_uploader.storage.gaufrette',
            'rs_queue.queues' => array(
                'suggest' => 'queues:suggest',
                'notices' => 'queues:notices',
                'inspire' => 'queues:inspire',
            ),
            'rs_queue.serializer.class' => 'Mmoreram\\RSQueueBundle\\Serializer\\JsonSerializer',
            'rs_queue.server.redis' => array(
                'host' => 'localhost',
                'port' => 6379,
                'database' => 8,
            ),
            'rs_queue.serializer.factory.class' => 'Mmoreram\\RSQueueBundle\\Factory\\SerializerFactory',
            'rs_queue.serializer.interface' => 'Mmoreram\\RSQueueBundle\\SerializerInterface',
            'rs_queue.redis.factory.class' => 'Mmoreram\\RSQueueBundle\\Factory\\RedisFactory',
            'rs_queue.resolver.queuealias.class' => 'Mmoreram\\RSQueueBundle\\Resolver\\QueueAliasResolver',
            'bazinga.jstranslation.translation_finder.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Finder\\TranslationFinder',
            'bazinga.jstranslation.translation_dumper.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Dumper\\TranslationDumper',
            'bazinga.jstranslation.controller.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Controller\\Controller',
            'ivory_ck_editor.form.type.class' => 'Ivory\\CKEditorBundle\\Form\\Type\\CKEditorType',
            'ivory_ck_editor.config_manager.class' => 'Ivory\\CKEditorBundle\\Model\\ConfigManager',
            'ivory_ck_editor.plugin_manager.class' => 'Ivory\\CKEditorBundle\\Model\\PluginManager',
            'ivory_ck_editor.styles_set_manager.class' => 'Ivory\\CKEditorBundle\\Model\\StylesSetManager',
            'ivory_ck_editor.template_manager.class' => 'Ivory\\CKEditorBundle\\Model\\TemplateManager',
            'ivory_ck_editor.templating.helper.class' => 'Ivory\\CKEditorBundle\\Templating\\CKEditorHelper',
            'ivory_ck_editor.twig_extension.class' => 'Ivory\\CKEditorBundle\\Twig\\CKEditorExtension',
            'ivory_ck_editor.form.type.enable' => true,
            'ivory_ck_editor.form.type.autoload' => true,
            'ivory_ck_editor.form.type.base_path' => 'bundles/ivoryckeditor/',
            'ivory_ck_editor.form.type.js_path' => 'bundles/ivoryckeditor/ckeditor.js',
            'elfinder.loader' => 'FM\\ElfinderBundle\\Loader\\FMElfinderLoader',
            'fm_elfinder' => array(
                'editor' => 'ckeditor',
                'include_assets' => true,
                'compression' => false,
                'fullscreen' => true,
                'connector' => array(
                    'roots' => array(
                        'uploads' => array(
                            'driver' => 'LocalFileSystem',
                            'path' => ($this->targetDirs[4].'/media/images/ref/content'),
                            'url' => 'media/images/ref/content',
                            'upload_allow' => array(
                                0 => 'image/png',
                                1 => 'image/jpg',
                                2 => 'image/jpeg',
                            ),
                            'upload_deny' => array(
                                0 => 'all',
                            ),
                            'upload_max_size' => '25M',
                            'showhidden' => false,
                            'relative_url' => false,
                        ),
                    ),
                    'debug' => false,
                ),
                'locale' => NULL,
                'tinymce_popup_path' => '',
            ),
            'nordcode_admin.json_type.class' => 'Nordcode\\AdminBundle\\Form\\Type\\JsonType',
            'nordcode_admin.admin_locale_listener.class' => 'Nordcode\\AdminBundle\\EventListener\\AdminLocaleListener',
            'nordcode_user.admin.block.user_main_data.class' => 'Nordcode\\AdminBundle\\Block\\UserMainDataBlockService',
            'nordcode_user.admin.block.user_course.class' => 'Nordcode\\AdminBundle\\Block\\UserCourseBlockService',
            'nordcode_user.admin.block.user_course_health.class' => 'Nordcode\\AdminBundle\\Block\\UserCourseHealthBlockService',
            'nordcode_user.admin.block.user_course_weekly.class' => 'Nordcode\\AdminBundle\\Block\\UserCourseWeeklyBlockService',
            'nordcode_user.admin.block.user_academy.class' => 'Nordcode\\AdminBundle\\Block\\UserAcademyBlockService',
            'nordcode_user.admin.block.meal_favorite.class' => 'Nordcode\\AdminBundle\\Block\\UserMealFavoriteBlockService',
            'nordcode_user.admin.block.workout_favorite.class' => 'Nordcode\\AdminBundle\\Block\\UserWorkoutFavoriteBlockService',
            'nordcode_user.admin.block.diary_entries.class' => 'Nordcode\\AdminBundle\\Block\\UserDiaryBlockService',
            'nordcode_rest.assoc_collection_handler.class' => 'Nordcode\\RestBundle\\Serializer\\Handler\\AssocCollectionHandler',
            'nordcode_rest.form_handler.class' => 'Nordcode\\RestBundle\\Serializer\\Handler\\FormHandler',
            'nordcode_rest.rest_data_handler.class' => 'Nordcode\\RestBundle\\Serializer\\Handler\\RestDataHandler',
            'nordcode_rest.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'nordcode_rest.view_handler.serialize_null.class' => 'Nordcode\\RestBundle\\View\\ViewHandler',
            'nordcode_switchfit.access_denied_exception_listener.class' => 'Nordcode\\SwitchfitBundle\\EventListener\\AccessDeniedHttpExceptionListener',
            'nordcode_switchfit.admin.payment_instruction.class' => 'Nordcode\\SwitchfitBundle\\Admin\\PaymentInstructionAdmin',
            'nordcode_switchfit.admin.payment.class' => 'Nordcode\\SwitchfitBundle\\Admin\\PaymentAdmin',
            'nordcode_switchfit.admin.transaction.class' => 'Nordcode\\SwitchfitBundle\\Admin\\FinancialTransactionAdmin',
            'nordcode_switchfit.admin.course_price.class' => 'Nordcode\\SwitchfitBundle\\Admin\\CoursePriceAdmin',
            'nordcode_switchfit.admin.course_promo_code.class' => 'Nordcode\\SwitchfitBundle\\Admin\\CoursePromoCodeAdmin',
            'nordcode_switchfit.admin.course.class' => 'Nordcode\\SwitchfitBundle\\Admin\\CourseAdmin',
            'nordcode_switchfit.admin.user_course.class' => 'Nordcode\\SwitchfitBundle\\Admin\\UserCourseAdmin',
            'nordcode_switchfit.admin.user_course_day.class' => 'Nordcode\\SwitchfitBundle\\Admin\\UserCourseDayAdmin',
            'nordcode_switchfit.admin.user_course_week.class' => 'Nordcode\\SwitchfitBundle\\Admin\\UserCourseWeekAdmin',
            'nordcode_switchfit.admin.timetable_item.class' => 'Nordcode\\SwitchfitBundle\\Admin\\TimetableItemAdmin',
            'nordcode_switchfit.admin.warmup_task.class' => 'Nordcode\\SwitchfitBundle\\Admin\\WarmupTaskAdmin',
            'nordcode_switchfit.admin.user_course_warmup.class' => 'Nordcode\\SwitchfitBundle\\Admin\\UserCourseWarmupAdmin',
            'nordcode_switchfit.admin.body_type.class' => 'Nordcode\\SwitchfitBundle\\Admin\\BodyTypeAdmin',
            'nordcode_switchfit.admin.meal_category.class' => 'Nordcode\\SwitchfitBundle\\Admin\\MealCategoryAdmin',
            'nordcode_switchfit.admin.meal_type.class' => 'Nordcode\\SwitchfitBundle\\Admin\\MealTypeAdmin',
            'nordcode_switchfit.admin.meal.class' => 'Nordcode\\SwitchfitBundle\\Admin\\MealAdmin',
            'nordcode_switchfit.admin.meal_favorite.class' => 'Nordcode\\SwitchfitBundle\\Admin\\MealFavoriteAdmin',
            'nordcode_switchfit.admin.meal_photo.class' => 'Nordcode\\SwitchfitBundle\\Admin\\MealPhotoAdmin',
            'nordcode_switchfit.admin.workout_category.class' => 'Nordcode\\SwitchfitBundle\\Admin\\WorkoutCategoryAdmin',
            'nordcode_switchfit.admin.workout_type.class' => 'Nordcode\\SwitchfitBundle\\Admin\\WorkoutTypeAdmin',
            'nordcode_switchfit.admin.workout.class' => 'Nordcode\\SwitchfitBundle\\Admin\\WorkoutAdmin',
            'nordcode_switchfit.admin.workout_photo.class' => 'Nordcode\\SwitchfitBundle\\Admin\\WorkoutPhotoAdmin',
            'nordcode_switchfit.admin.workout_dayofcourse.class' => 'Nordcode\\SwitchfitBundle\\Admin\\WorkoutDayOfCourseAdmin',
            'nordcode_switchfit.admin.workout_favorite.class' => 'Nordcode\\SwitchfitBundle\\Admin\\WorkoutFavoriteAdmin',
            'nordcode_switchfit.admin.workout_location.class' => 'Nordcode\\SwitchfitBundle\\Admin\\WorkoutLocationAdmin',
            'nordcode_switchfit.admin.product.class' => 'Nordcode\\SwitchfitBundle\\Admin\\ProductAdmin',
            'nordcode_switchfit.admin.contact_message.class' => 'Nordcode\\SwitchfitBundle\\Admin\\ContactMessageAdmin',
            'nordcode_switchfit.admin.suggest_template.class' => 'Nordcode\\SwitchfitBundle\\Admin\\SuggestTemplateAdmin',
            'nordcode_switchfit.admin.suggest_template_has_day.class' => 'Nordcode\\SwitchfitBundle\\Admin\\SuggestTemplateHasDayAdmin',
            'nordcode_switchfit.admin.suggest_day.class' => 'Nordcode\\SwitchfitBundle\\Admin\\SuggestDayAdmin',
            'nordcode_switchfit.admin.suggest_day_item.class' => 'Nordcode\\SwitchfitBundle\\Admin\\SuggestDayItemAdmin',
            'nordcode_switchfit.admin.diary.class' => 'Nordcode\\SwitchfitBundle\\Admin\\DiaryAdmin',
            'nordcode_switchfit.admin.diary_entry.class' => 'Nordcode\\SwitchfitBundle\\Admin\\DiaryEntryAdmin',
            'nordcode_switchfit.admin.diary_entry_comment.class' => 'Nordcode\\SwitchfitBundle\\Admin\\DiaryEntryCommentAdmin',
            'nordcode_switchfit.admin.diary_entry_vote.class' => 'Nordcode\\SwitchfitBundle\\Admin\\DiaryEntryVoteAdmin',
            'nordcode_switchfit.admin.content.class' => 'Nordcode\\SwitchfitBundle\\Admin\\ContentAdmin',
            'nordcode_switchfit.admin.sf_life_header.class' => 'Nordcode\\SwitchfitBundle\\Admin\\SFLifeHeaderAdmin',
            'nordcode_switchfit.admin.sf_life_video.class' => 'Nordcode\\SwitchfitBundle\\Admin\\SFLifeVideoAdmin',
            'nordcode_uploader.adapter.local.class' => 'Nordcode\\UploaderBundle\\Adapter\\Local',
            'nordcode_uploader.namer_uniqid.class' => 'Nordcode\\UploaderBundle\\Namer\\UniqidNamer',
            'nordcode_uploader.storage.gaufrette.class' => 'Nordcode\\UploaderBundle\\Storage\\GaufretteStorage',
            'nordcode_uploader.templating.helper.uploader_helper.class' => 'Nordcode\\UploaderBundle\\Templating\\Helper\\UploaderHelper',
            'nordcode_uploader.quest_directory' => ($this->targetDirs[4].'/media/images/ref/quest'),
            'nordcode_uploader.meal_directory' => ($this->targetDirs[4].'/media/images/ref/meal'),
            'nordcode_uploader.workout_directory' => ($this->targetDirs[4].'/media/images/ref/workout'),
            'nordcode_uploader.user_directory' => ($this->targetDirs[4].'/media/images/ref/user'),
            'nordcode_uploader.diary_directory' => ($this->targetDirs[4].'/media/images/ref/diary'),
            'nordcode_uploader.sf_life_directory' => ($this->targetDirs[4].'/media/images/ref/sflife'),
            'nordcode_uploader.city_directory' => ($this->targetDirs[4].'/media/images/ref/city'),
            'nordcode_uploader.listener.serialization_listener.class' => 'Nordcode\\UploaderBundle\\EventListener\\SerializationListener',
            'nordcode_uploader.uploader_file.class' => 'Nordcode\\UploaderBundle\\Form\\Type\\FileType',
            'nordcode_uploader.sonata_uploader_file.class' => 'Nordcode\\UploaderBundle\\Form\\Type\\SonataFileType',
            'nordcode_academy.academy_manager.class' => 'Nordcode\\AcademyBundle\\Entity\\Manager\\AcademyManager',
            'nordcode_academy.admin.academy.class' => 'Nordcode\\AcademyBundle\\Admin\\AcademyAdmin',
            'nordcode_academy.admin.academy_has_module.class' => 'Nordcode\\AcademyBundle\\Admin\\AcademyHasModuleAdmin',
            'nordcode_academy.admin.module.class' => 'Nordcode\\AcademyBundle\\Admin\\ModuleAdmin',
            'nordcode_academy.admin.topic.class' => 'Nordcode\\AcademyBundle\\Admin\\TopicAdmin',
            'nordcode_academy.admin.question.class' => 'Nordcode\\AcademyBundle\\Admin\\QuestionAdmin',
            'nordcode_academy.admin.answer.class' => 'Nordcode\\AcademyBundle\\Admin\\AnswerAdmin',
            'nordcode_notification.notice_manager.class' => 'Nordcode\\NotificationBundle\\Entity\\NoticeManager',
            'nordcode_notification.admin.notice.class' => 'Nordcode\\NotificationBundle\\Admin\\NoticeAdmin',
            'nordcode_qa.manager.class' => 'Nordcode\\QABundle\\Entity\\Manager\\QAManager',
            'nordcode_qa.admin.question.class' => 'Nordcode\\QABundle\\Admin\\QuestionAdmin',
            'nordcode_qa.admin.answer.class' => 'Nordcode\\QABundle\\Admin\\AnswerAdmin',
            'nordcode_qa.admin.category.class' => 'Nordcode\\QABundle\\Admin\\CategoryAdmin',
            'nordcode_qa.admin.vote.class' => 'Nordcode\\QABundle\\Admin\\VoteAdmin',
            'nordcode_admin_page_board.routes_config.class' => 'Nordcode\\AdminPageBoardBundle\\Routing\\RouteConfig',
            'nordcode_admin_page_board.routes_loader.class' => 'Nordcode\\AdminPageBoardBundle\\Routing\\RouteLoader',
            'nordcode_admin_page_board.page_boards.routes_config' => array(
                'user_details' => array(
                    'name' => 'admin_nordcode_user_user_details',
                    'path' => '/nordcode/user/user/details/{id}',
                    'requirements' => array(
                        'id' => '\\d+',
                    ),
                    'prefix' => '/admin',
                    'host' => '',
                    'schemes' => array(
                    ),
                    'options' => array(
                    ),
                ),
            ),
            'nordcode_admin_page_board.routes_prefix_name' => 'admin_nordcode',
            'nordcode_admin_page_board.manager.class' => 'Nordcode\\AdminPageBoardBundle\\Manager\\PageBoardManager',
            'nordcode_admin_page_board.page_board_template' => 'NordcodeAdminBundle:Core:page_board.html.twig',
            'nordcode_admin_page_board.block.loader.class' => 'Nordcode\\AdminPageBoardBundle\\Block\\Loader\\ServiceLoader',
            'nordcode_admin_page_board.block.loader.chain.class' => 'Nordcode\\AdminPageBoardBundle\\Block\\Loader\\BlockLoaderChain',
            'nordcode_admin_page_board.page_boards.blocks' => array(
                'user_details' => array(
                    0 => array(
                        'position' => 'left',
                        'type' => 'nordcode_user.admin.block.user_main_data',
                        'tab' => 'General',
                        'settings' => array(
                            'title' => 'User data',
                        ),
                    ),
                    1 => array(
                        'position' => 'right',
                        'type' => 'nordcode_user.admin.block.user_academy',
                        'tab' => 'General',
                        'settings' => array(
                            'title' => 'Academy progress',
                        ),
                    ),
                    2 => array(
                        'position' => 'left',
                        'type' => 'nordcode_user.admin.block.user_course',
                        'tab' => 'General',
                        'settings' => array(
                            'title' => 'Course data',
                        ),
                    ),
                    3 => array(
                        'position' => 'full',
                        'type' => 'nordcode_user.admin.block.user_course_health',
                        'tab' => 'Course board',
                        'settings' => array(
                            'title' => 'Course board',
                        ),
                    ),
                    4 => array(
                        'position' => 'full',
                        'type' => 'nordcode_user.admin.block.user_course_weekly',
                        'tab' => 'Weekly data',
                        'settings' => array(
                            'title' => 'Weekly board',
                        ),
                    ),
                    5 => array(
                        'position' => 'left',
                        'type' => 'nordcode_user.admin.block.meal_favorite',
                        'tab' => 'Favorites',
                        'settings' => array(
                            'title' => 'Meal favorites',
                        ),
                    ),
                    6 => array(
                        'position' => 'right',
                        'type' => 'nordcode_user.admin.block.workout_favorite',
                        'tab' => 'Favorites',
                        'settings' => array(
                            'title' => 'Workout favorites',
                        ),
                    ),
                    7 => array(
                        'position' => 'full',
                        'type' => 'nordcode_user.admin.block.diary_entries',
                        'tab' => 'Diary',
                        'settings' => array(
                            'title' => 'Diary entries',
                        ),
                    ),
                ),
            ),
            'nordcode_admin_page_board.sonata_admin_layout_template' => 'NordcodeAdminBundle::layout.html.twig',
            'nordcode_quest.quest_manager.class' => 'Nordcode\\QuestBundle\\Entity\\Manager\\QuestManager',
            'nordcode_quest.admin.quest.class' => 'Nordcode\\QuestBundle\\Admin\\QuestAdmin',
            'nordcode_quest.admin.quest_category.class' => 'Nordcode\\QuestBundle\\Admin\\QuestCategoryAdmin',
            'nordcode_quest.admin.quest_photo.class' => 'Nordcode\\QuestBundle\\Admin\\QuestPhotoAdmin',
            'nordcode_point.activity_manager.class' => 'Nordcode\\PointBundle\\Entity\\Manager\\ActivityManager',
            'nordcode_point.point_manager.class' => 'Nordcode\\PointBundle\\Entity\\Manager\\PointManager',
            'hwi_oauth.authentication.listener.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\Firewall\\OAuthListener',
            'hwi_oauth.authentication.provider.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\Authentication\\Provider\\OAuthProvider',
            'hwi_oauth.authentication.entry_point.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\EntryPoint\\OAuthEntryPoint',
            'hwi_oauth.user.provider.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\OAuthUserProvider',
            'hwi_oauth.user.provider.entity.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\EntityUserProvider',
            'hwi_oauth.user.provider.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Core\\User\\FOSUBUserProvider',
            'hwi_oauth.registration.form.handler.fosub_bridge.class' => 'HWI\\Bundle\\OAuthBundle\\Form\\FOSUBRegistrationFormHandler',
            'hwi_oauth.resource_owner.oauth1.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth1ResourceOwner',
            'hwi_oauth.resource_owner.oauth2.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GenericOAuth2ResourceOwner',
            'hwi_oauth.resource_owner.amazon.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\AmazonResourceOwner',
            'hwi_oauth.resource_owner.auth0.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\Auth0ResourceOwner',
            'hwi_oauth.resource_owner.bitbucket.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitbucketResourceOwner',
            'hwi_oauth.resource_owner.bitly.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BitlyResourceOwner',
            'hwi_oauth.resource_owner.box.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\BoxResourceOwner',
            'hwi_oauth.resource_owner.dailymotion.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DailymotionResourceOwner',
            'hwi_oauth.resource_owner.deviantart.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DeviantartResourceOwner',
            'hwi_oauth.resource_owner.disqus.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DisqusResourceOwner',
            'hwi_oauth.resource_owner.dropbox.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\DropboxResourceOwner',
            'hwi_oauth.resource_owner.eve_online.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EveOnlineResourceOwner',
            'hwi_oauth.resource_owner.eventbrite.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\EventbriteResourceOwner',
            'hwi_oauth.resource_owner.facebook.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FacebookResourceOwner',
            'hwi_oauth.resource_owner.flickr.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FlickrResourceOwner',
            'hwi_oauth.resource_owner.foursquare.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\FoursquareResourceOwner',
            'hwi_oauth.resource_owner.github.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GitHubResourceOwner',
            'hwi_oauth.resource_owner.google.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\GoogleResourceOwner',
            'hwi_oauth.resource_owner.youtube.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YoutubeResourceOwner',
            'hwi_oauth.resource_owner.hubic.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\HubicResourceOwner',
            'hwi_oauth.resource_owner.instagram.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\InstagramResourceOwner',
            'hwi_oauth.resource_owner.jira.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\JiraResourceOwner',
            'hwi_oauth.resource_owner.linkedin.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\LinkedinResourceOwner',
            'hwi_oauth.resource_owner.mailru.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\MailRuResourceOwner',
            'hwi_oauth.resource_owner.paypal.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\PaypalResourceOwner',
            'hwi_oauth.resource_owner.qq.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\QQResourceOwner',
            'hwi_oauth.resource_owner.reddit.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\RedditResourceOwner',
            'hwi_oauth.resource_owner.salesforce.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SalesforceResourceOwner',
            'hwi_oauth.resource_owner.sensio_connect.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SensioConnectResourceOwner',
            'hwi_oauth.resource_owner.sina_weibo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SinaWeiboResourceOwner',
            'hwi_oauth.resource_owner.spotify.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SpotifyResourceOwner',
            'hwi_oauth.resource_owner.soundcloud.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\SoundcloudResourceOwner',
            'hwi_oauth.resource_owner.stack_exchange.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StackExchangeResourceOwner',
            'hwi_oauth.resource_owner.stereomood.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\StereomoodResourceOwner',
            'hwi_oauth.resource_owner.toshl.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ToshlResourceOwner',
            'hwi_oauth.resource_owner.trello.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TrelloResourceOwner',
            'hwi_oauth.resource_owner.twitch.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitchResourceOwner',
            'hwi_oauth.resource_owner.twitter.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\TwitterResourceOwner',
            'hwi_oauth.resource_owner.vkontakte.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\VkontakteResourceOwner',
            'hwi_oauth.resource_owner.wechat.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WechatResourceOwner',
            'hwi_oauth.resource_owner.windows_live.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WindowsLiveResourceOwner',
            'hwi_oauth.resource_owner.wordpress.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\WordpressResourceOwner',
            'hwi_oauth.resource_owner.xing.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\XingResourceOwner',
            'hwi_oauth.resource_owner.yahoo.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YahooResourceOwner',
            'hwi_oauth.resource_owner.yandex.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\YandexResourceOwner',
            'hwi_oauth.resource_owner.odnoklassniki.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\OdnoklassnikiResourceOwner',
            'hwi_oauth.resource_owner.37signals.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\ResourceOwner\\ThirtySevenSignalsResourceOwner',
            'hwi_oauth.resource_ownermap.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\Http\\ResourceOwnerMap',
            'hwi_oauth.security.oauth_utils.class' => 'HWI\\Bundle\\OAuthBundle\\Security\\OAuthUtils',
            'hwi_oauth.storage.session.class' => 'HWI\\Bundle\\OAuthBundle\\OAuth\\RequestDataStorage\\SessionStorage',
            'hwi_oauth.templating.helper.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Templating\\Helper\\OAuthHelper',
            'hwi_oauth.twig.extension.oauth.class' => 'HWI\\Bundle\\OAuthBundle\\Twig\\Extension\\OAuthExtension',
            'hwi_oauth.http_client.class' => 'Buzz\\Client\\Curl',
            'hwi_oauth.firewall_name' => 'main',
            'hwi_oauth.target_path_parameter' => NULL,
            'hwi_oauth.use_referer' => false,
            'hwi_oauth.resource_owners' => array(
                0 => 'facebook',
            ),
            'hwi_oauth.connect' => false,
            'hwi_oauth.templating.engine' => 'twig',
            'nordcode_tipps.tipps_manager.class' => 'Nordcode\\TippsBundle\\Entity\\Manager\\TippsManager',
            'nordcode_tipps.admin.tipp.class' => 'Nordcode\\TippsBundle\\Admin\\TippsAdmin',
            'nelmio_api_doc.parser.form_type_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormTypeParser',
            'nelmio_api_doc.parser.validation_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\ValidationParser',
            'nelmio_api_doc.parser.jms_metadata_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\JmsMetadataParser',
        );
    }
}
