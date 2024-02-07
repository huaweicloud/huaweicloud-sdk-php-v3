<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemoteAuthRuleVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'remoteAuthRuleVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authServer  可访问的鉴权服务器地址。 输入的URL必须有“http”或“https”。不能是localhost或127.0.0.1这类本地地址。 不能是CDN的加速域名。
    * requestMethod  鉴权服务器支持的请求方法，支持GET、POST、HEAD。
    * fileTypeSetting  all（所有文件类型）：所有文件均参与鉴权。 specific_file（指定文件类型）：指定类型的文件参与鉴权。示例：jpg|MP4。 文件类型不区分大小写，即：jpg和JPG代表同一种文件类型，多个文件类型用“|”分割。
    * specifiedFileType  字符总数不能超过512,当file_type_setting等于specific_file时为必选，其余情况为空， 由大小写字母和数字构成，文件类型用竖线分隔，例如jpg|mp4，只有在必选情况下才会对该字段做校验。
    * reserveArgsSetting  设置用户请求中需要参与鉴权的参数，可选reserve_all_args（保留所有URL参数）、reserve_specific_args（保留指定URL参数）、ignore_all_args（忽略所有URL参数）。
    * reserveArgs  当reserve_args_setting等于reserve_specific_args时为必选，其余情况为空，要保留的参数，多个参数用竖线分隔：key1|key2。
    * addCustomArgsRules  URL鉴权参数
    * reserveHeadersSetting  设置用户请求中参与鉴权请求头，可选reserve_all_headers（保留所有请求头参数）、reserve_specific_headers（保留指定请求头参数）、ignore_all_headers（忽略所有请求头参数）。
    * addCustomHeadersRules  请求头鉴权参数
    * authSuccessStatus  设置鉴权成功时远程鉴权服务器返回给CDN节点的状态码。取值范围：2xx/3xx。
    * authFailedStatus  设置鉴权失败时远程鉴权服务器返回给CDN节点的状态码。取值范围：4xx/5xx。
    * responseStatus  设置鉴权失败时CDN节点返回给用户的状态码。取值范围：2xx/3xx/4xx/5xx。
    * timeout  设置鉴权超时时间，即从CDN转发鉴权请求开始，到CDN节点收到远程鉴权服务器返回的结果的时间。单位为毫秒，值为0或50-3000。
    * timeoutAction  设置鉴权超时后，CDN节点如何处理用户请求。 pass(鉴权失败放过)：鉴权超时后允许用户请求，返回对应的资源。 forbid(鉴权失败拒绝)：鉴权超时后拒绝用户请求，返回配置的响应自定义状态码给用户。
    * reserveHeaders  当reserve_headers_setting等于reserve_specific_headers时为必选，其余情况为空，要保留的请求头，多个请求头用竖线分隔：key1|key2。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authServer' => 'string',
            'requestMethod' => 'string',
            'fileTypeSetting' => 'string',
            'specifiedFileType' => 'string',
            'reserveArgsSetting' => 'string',
            'reserveArgs' => 'string',
            'addCustomArgsRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\CustomArgs[]',
            'reserveHeadersSetting' => 'string',
            'addCustomHeadersRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\CustomArgs[]',
            'authSuccessStatus' => 'string',
            'authFailedStatus' => 'string',
            'responseStatus' => 'string',
            'timeout' => 'int',
            'timeoutAction' => 'string',
            'reserveHeaders' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authServer  可访问的鉴权服务器地址。 输入的URL必须有“http”或“https”。不能是localhost或127.0.0.1这类本地地址。 不能是CDN的加速域名。
    * requestMethod  鉴权服务器支持的请求方法，支持GET、POST、HEAD。
    * fileTypeSetting  all（所有文件类型）：所有文件均参与鉴权。 specific_file（指定文件类型）：指定类型的文件参与鉴权。示例：jpg|MP4。 文件类型不区分大小写，即：jpg和JPG代表同一种文件类型，多个文件类型用“|”分割。
    * specifiedFileType  字符总数不能超过512,当file_type_setting等于specific_file时为必选，其余情况为空， 由大小写字母和数字构成，文件类型用竖线分隔，例如jpg|mp4，只有在必选情况下才会对该字段做校验。
    * reserveArgsSetting  设置用户请求中需要参与鉴权的参数，可选reserve_all_args（保留所有URL参数）、reserve_specific_args（保留指定URL参数）、ignore_all_args（忽略所有URL参数）。
    * reserveArgs  当reserve_args_setting等于reserve_specific_args时为必选，其余情况为空，要保留的参数，多个参数用竖线分隔：key1|key2。
    * addCustomArgsRules  URL鉴权参数
    * reserveHeadersSetting  设置用户请求中参与鉴权请求头，可选reserve_all_headers（保留所有请求头参数）、reserve_specific_headers（保留指定请求头参数）、ignore_all_headers（忽略所有请求头参数）。
    * addCustomHeadersRules  请求头鉴权参数
    * authSuccessStatus  设置鉴权成功时远程鉴权服务器返回给CDN节点的状态码。取值范围：2xx/3xx。
    * authFailedStatus  设置鉴权失败时远程鉴权服务器返回给CDN节点的状态码。取值范围：4xx/5xx。
    * responseStatus  设置鉴权失败时CDN节点返回给用户的状态码。取值范围：2xx/3xx/4xx/5xx。
    * timeout  设置鉴权超时时间，即从CDN转发鉴权请求开始，到CDN节点收到远程鉴权服务器返回的结果的时间。单位为毫秒，值为0或50-3000。
    * timeoutAction  设置鉴权超时后，CDN节点如何处理用户请求。 pass(鉴权失败放过)：鉴权超时后允许用户请求，返回对应的资源。 forbid(鉴权失败拒绝)：鉴权超时后拒绝用户请求，返回配置的响应自定义状态码给用户。
    * reserveHeaders  当reserve_headers_setting等于reserve_specific_headers时为必选，其余情况为空，要保留的请求头，多个请求头用竖线分隔：key1|key2。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authServer' => null,
        'requestMethod' => null,
        'fileTypeSetting' => null,
        'specifiedFileType' => null,
        'reserveArgsSetting' => null,
        'reserveArgs' => null,
        'addCustomArgsRules' => null,
        'reserveHeadersSetting' => null,
        'addCustomHeadersRules' => null,
        'authSuccessStatus' => null,
        'authFailedStatus' => null,
        'responseStatus' => null,
        'timeout' => 'int32',
        'timeoutAction' => null,
        'reserveHeaders' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * authServer  可访问的鉴权服务器地址。 输入的URL必须有“http”或“https”。不能是localhost或127.0.0.1这类本地地址。 不能是CDN的加速域名。
    * requestMethod  鉴权服务器支持的请求方法，支持GET、POST、HEAD。
    * fileTypeSetting  all（所有文件类型）：所有文件均参与鉴权。 specific_file（指定文件类型）：指定类型的文件参与鉴权。示例：jpg|MP4。 文件类型不区分大小写，即：jpg和JPG代表同一种文件类型，多个文件类型用“|”分割。
    * specifiedFileType  字符总数不能超过512,当file_type_setting等于specific_file时为必选，其余情况为空， 由大小写字母和数字构成，文件类型用竖线分隔，例如jpg|mp4，只有在必选情况下才会对该字段做校验。
    * reserveArgsSetting  设置用户请求中需要参与鉴权的参数，可选reserve_all_args（保留所有URL参数）、reserve_specific_args（保留指定URL参数）、ignore_all_args（忽略所有URL参数）。
    * reserveArgs  当reserve_args_setting等于reserve_specific_args时为必选，其余情况为空，要保留的参数，多个参数用竖线分隔：key1|key2。
    * addCustomArgsRules  URL鉴权参数
    * reserveHeadersSetting  设置用户请求中参与鉴权请求头，可选reserve_all_headers（保留所有请求头参数）、reserve_specific_headers（保留指定请求头参数）、ignore_all_headers（忽略所有请求头参数）。
    * addCustomHeadersRules  请求头鉴权参数
    * authSuccessStatus  设置鉴权成功时远程鉴权服务器返回给CDN节点的状态码。取值范围：2xx/3xx。
    * authFailedStatus  设置鉴权失败时远程鉴权服务器返回给CDN节点的状态码。取值范围：4xx/5xx。
    * responseStatus  设置鉴权失败时CDN节点返回给用户的状态码。取值范围：2xx/3xx/4xx/5xx。
    * timeout  设置鉴权超时时间，即从CDN转发鉴权请求开始，到CDN节点收到远程鉴权服务器返回的结果的时间。单位为毫秒，值为0或50-3000。
    * timeoutAction  设置鉴权超时后，CDN节点如何处理用户请求。 pass(鉴权失败放过)：鉴权超时后允许用户请求，返回对应的资源。 forbid(鉴权失败拒绝)：鉴权超时后拒绝用户请求，返回配置的响应自定义状态码给用户。
    * reserveHeaders  当reserve_headers_setting等于reserve_specific_headers时为必选，其余情况为空，要保留的请求头，多个请求头用竖线分隔：key1|key2。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authServer' => 'auth_server',
            'requestMethod' => 'request_method',
            'fileTypeSetting' => 'file_type_setting',
            'specifiedFileType' => 'specified_file_type',
            'reserveArgsSetting' => 'reserve_args_setting',
            'reserveArgs' => 'reserve_args',
            'addCustomArgsRules' => 'add_custom_args_rules',
            'reserveHeadersSetting' => 'reserve_headers_setting',
            'addCustomHeadersRules' => 'add_custom_headers_rules',
            'authSuccessStatus' => 'auth_success_status',
            'authFailedStatus' => 'auth_failed_status',
            'responseStatus' => 'response_status',
            'timeout' => 'timeout',
            'timeoutAction' => 'timeout_action',
            'reserveHeaders' => 'reserve_headers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authServer  可访问的鉴权服务器地址。 输入的URL必须有“http”或“https”。不能是localhost或127.0.0.1这类本地地址。 不能是CDN的加速域名。
    * requestMethod  鉴权服务器支持的请求方法，支持GET、POST、HEAD。
    * fileTypeSetting  all（所有文件类型）：所有文件均参与鉴权。 specific_file（指定文件类型）：指定类型的文件参与鉴权。示例：jpg|MP4。 文件类型不区分大小写，即：jpg和JPG代表同一种文件类型，多个文件类型用“|”分割。
    * specifiedFileType  字符总数不能超过512,当file_type_setting等于specific_file时为必选，其余情况为空， 由大小写字母和数字构成，文件类型用竖线分隔，例如jpg|mp4，只有在必选情况下才会对该字段做校验。
    * reserveArgsSetting  设置用户请求中需要参与鉴权的参数，可选reserve_all_args（保留所有URL参数）、reserve_specific_args（保留指定URL参数）、ignore_all_args（忽略所有URL参数）。
    * reserveArgs  当reserve_args_setting等于reserve_specific_args时为必选，其余情况为空，要保留的参数，多个参数用竖线分隔：key1|key2。
    * addCustomArgsRules  URL鉴权参数
    * reserveHeadersSetting  设置用户请求中参与鉴权请求头，可选reserve_all_headers（保留所有请求头参数）、reserve_specific_headers（保留指定请求头参数）、ignore_all_headers（忽略所有请求头参数）。
    * addCustomHeadersRules  请求头鉴权参数
    * authSuccessStatus  设置鉴权成功时远程鉴权服务器返回给CDN节点的状态码。取值范围：2xx/3xx。
    * authFailedStatus  设置鉴权失败时远程鉴权服务器返回给CDN节点的状态码。取值范围：4xx/5xx。
    * responseStatus  设置鉴权失败时CDN节点返回给用户的状态码。取值范围：2xx/3xx/4xx/5xx。
    * timeout  设置鉴权超时时间，即从CDN转发鉴权请求开始，到CDN节点收到远程鉴权服务器返回的结果的时间。单位为毫秒，值为0或50-3000。
    * timeoutAction  设置鉴权超时后，CDN节点如何处理用户请求。 pass(鉴权失败放过)：鉴权超时后允许用户请求，返回对应的资源。 forbid(鉴权失败拒绝)：鉴权超时后拒绝用户请求，返回配置的响应自定义状态码给用户。
    * reserveHeaders  当reserve_headers_setting等于reserve_specific_headers时为必选，其余情况为空，要保留的请求头，多个请求头用竖线分隔：key1|key2。
    *
    * @var string[]
    */
    protected static $setters = [
            'authServer' => 'setAuthServer',
            'requestMethod' => 'setRequestMethod',
            'fileTypeSetting' => 'setFileTypeSetting',
            'specifiedFileType' => 'setSpecifiedFileType',
            'reserveArgsSetting' => 'setReserveArgsSetting',
            'reserveArgs' => 'setReserveArgs',
            'addCustomArgsRules' => 'setAddCustomArgsRules',
            'reserveHeadersSetting' => 'setReserveHeadersSetting',
            'addCustomHeadersRules' => 'setAddCustomHeadersRules',
            'authSuccessStatus' => 'setAuthSuccessStatus',
            'authFailedStatus' => 'setAuthFailedStatus',
            'responseStatus' => 'setResponseStatus',
            'timeout' => 'setTimeout',
            'timeoutAction' => 'setTimeoutAction',
            'reserveHeaders' => 'setReserveHeaders'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authServer  可访问的鉴权服务器地址。 输入的URL必须有“http”或“https”。不能是localhost或127.0.0.1这类本地地址。 不能是CDN的加速域名。
    * requestMethod  鉴权服务器支持的请求方法，支持GET、POST、HEAD。
    * fileTypeSetting  all（所有文件类型）：所有文件均参与鉴权。 specific_file（指定文件类型）：指定类型的文件参与鉴权。示例：jpg|MP4。 文件类型不区分大小写，即：jpg和JPG代表同一种文件类型，多个文件类型用“|”分割。
    * specifiedFileType  字符总数不能超过512,当file_type_setting等于specific_file时为必选，其余情况为空， 由大小写字母和数字构成，文件类型用竖线分隔，例如jpg|mp4，只有在必选情况下才会对该字段做校验。
    * reserveArgsSetting  设置用户请求中需要参与鉴权的参数，可选reserve_all_args（保留所有URL参数）、reserve_specific_args（保留指定URL参数）、ignore_all_args（忽略所有URL参数）。
    * reserveArgs  当reserve_args_setting等于reserve_specific_args时为必选，其余情况为空，要保留的参数，多个参数用竖线分隔：key1|key2。
    * addCustomArgsRules  URL鉴权参数
    * reserveHeadersSetting  设置用户请求中参与鉴权请求头，可选reserve_all_headers（保留所有请求头参数）、reserve_specific_headers（保留指定请求头参数）、ignore_all_headers（忽略所有请求头参数）。
    * addCustomHeadersRules  请求头鉴权参数
    * authSuccessStatus  设置鉴权成功时远程鉴权服务器返回给CDN节点的状态码。取值范围：2xx/3xx。
    * authFailedStatus  设置鉴权失败时远程鉴权服务器返回给CDN节点的状态码。取值范围：4xx/5xx。
    * responseStatus  设置鉴权失败时CDN节点返回给用户的状态码。取值范围：2xx/3xx/4xx/5xx。
    * timeout  设置鉴权超时时间，即从CDN转发鉴权请求开始，到CDN节点收到远程鉴权服务器返回的结果的时间。单位为毫秒，值为0或50-3000。
    * timeoutAction  设置鉴权超时后，CDN节点如何处理用户请求。 pass(鉴权失败放过)：鉴权超时后允许用户请求，返回对应的资源。 forbid(鉴权失败拒绝)：鉴权超时后拒绝用户请求，返回配置的响应自定义状态码给用户。
    * reserveHeaders  当reserve_headers_setting等于reserve_specific_headers时为必选，其余情况为空，要保留的请求头，多个请求头用竖线分隔：key1|key2。
    *
    * @var string[]
    */
    protected static $getters = [
            'authServer' => 'getAuthServer',
            'requestMethod' => 'getRequestMethod',
            'fileTypeSetting' => 'getFileTypeSetting',
            'specifiedFileType' => 'getSpecifiedFileType',
            'reserveArgsSetting' => 'getReserveArgsSetting',
            'reserveArgs' => 'getReserveArgs',
            'addCustomArgsRules' => 'getAddCustomArgsRules',
            'reserveHeadersSetting' => 'getReserveHeadersSetting',
            'addCustomHeadersRules' => 'getAddCustomHeadersRules',
            'authSuccessStatus' => 'getAuthSuccessStatus',
            'authFailedStatus' => 'getAuthFailedStatus',
            'responseStatus' => 'getResponseStatus',
            'timeout' => 'getTimeout',
            'timeoutAction' => 'getTimeoutAction',
            'reserveHeaders' => 'getReserveHeaders'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['authServer'] = isset($data['authServer']) ? $data['authServer'] : null;
        $this->container['requestMethod'] = isset($data['requestMethod']) ? $data['requestMethod'] : null;
        $this->container['fileTypeSetting'] = isset($data['fileTypeSetting']) ? $data['fileTypeSetting'] : null;
        $this->container['specifiedFileType'] = isset($data['specifiedFileType']) ? $data['specifiedFileType'] : null;
        $this->container['reserveArgsSetting'] = isset($data['reserveArgsSetting']) ? $data['reserveArgsSetting'] : null;
        $this->container['reserveArgs'] = isset($data['reserveArgs']) ? $data['reserveArgs'] : null;
        $this->container['addCustomArgsRules'] = isset($data['addCustomArgsRules']) ? $data['addCustomArgsRules'] : null;
        $this->container['reserveHeadersSetting'] = isset($data['reserveHeadersSetting']) ? $data['reserveHeadersSetting'] : null;
        $this->container['addCustomHeadersRules'] = isset($data['addCustomHeadersRules']) ? $data['addCustomHeadersRules'] : null;
        $this->container['authSuccessStatus'] = isset($data['authSuccessStatus']) ? $data['authSuccessStatus'] : null;
        $this->container['authFailedStatus'] = isset($data['authFailedStatus']) ? $data['authFailedStatus'] : null;
        $this->container['responseStatus'] = isset($data['responseStatus']) ? $data['responseStatus'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['timeoutAction'] = isset($data['timeoutAction']) ? $data['timeoutAction'] : null;
        $this->container['reserveHeaders'] = isset($data['reserveHeaders']) ? $data['reserveHeaders'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['authServer'] === null) {
            $invalidProperties[] = "'authServer' can't be null";
        }
        if ($this->container['requestMethod'] === null) {
            $invalidProperties[] = "'requestMethod' can't be null";
        }
        if ($this->container['fileTypeSetting'] === null) {
            $invalidProperties[] = "'fileTypeSetting' can't be null";
        }
        if ($this->container['reserveArgsSetting'] === null) {
            $invalidProperties[] = "'reserveArgsSetting' can't be null";
        }
        if ($this->container['reserveHeadersSetting'] === null) {
            $invalidProperties[] = "'reserveHeadersSetting' can't be null";
        }
        if ($this->container['authSuccessStatus'] === null) {
            $invalidProperties[] = "'authSuccessStatus' can't be null";
        }
        if ($this->container['authFailedStatus'] === null) {
            $invalidProperties[] = "'authFailedStatus' can't be null";
        }
        if ($this->container['responseStatus'] === null) {
            $invalidProperties[] = "'responseStatus' can't be null";
        }
        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
        if ($this->container['timeoutAction'] === null) {
            $invalidProperties[] = "'timeoutAction' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets authServer
    *  可访问的鉴权服务器地址。 输入的URL必须有“http”或“https”。不能是localhost或127.0.0.1这类本地地址。 不能是CDN的加速域名。
    *
    * @return string
    */
    public function getAuthServer()
    {
        return $this->container['authServer'];
    }

    /**
    * Sets authServer
    *
    * @param string $authServer 可访问的鉴权服务器地址。 输入的URL必须有“http”或“https”。不能是localhost或127.0.0.1这类本地地址。 不能是CDN的加速域名。
    *
    * @return $this
    */
    public function setAuthServer($authServer)
    {
        $this->container['authServer'] = $authServer;
        return $this;
    }

    /**
    * Gets requestMethod
    *  鉴权服务器支持的请求方法，支持GET、POST、HEAD。
    *
    * @return string
    */
    public function getRequestMethod()
    {
        return $this->container['requestMethod'];
    }

    /**
    * Sets requestMethod
    *
    * @param string $requestMethod 鉴权服务器支持的请求方法，支持GET、POST、HEAD。
    *
    * @return $this
    */
    public function setRequestMethod($requestMethod)
    {
        $this->container['requestMethod'] = $requestMethod;
        return $this;
    }

    /**
    * Gets fileTypeSetting
    *  all（所有文件类型）：所有文件均参与鉴权。 specific_file（指定文件类型）：指定类型的文件参与鉴权。示例：jpg|MP4。 文件类型不区分大小写，即：jpg和JPG代表同一种文件类型，多个文件类型用“|”分割。
    *
    * @return string
    */
    public function getFileTypeSetting()
    {
        return $this->container['fileTypeSetting'];
    }

    /**
    * Sets fileTypeSetting
    *
    * @param string $fileTypeSetting all（所有文件类型）：所有文件均参与鉴权。 specific_file（指定文件类型）：指定类型的文件参与鉴权。示例：jpg|MP4。 文件类型不区分大小写，即：jpg和JPG代表同一种文件类型，多个文件类型用“|”分割。
    *
    * @return $this
    */
    public function setFileTypeSetting($fileTypeSetting)
    {
        $this->container['fileTypeSetting'] = $fileTypeSetting;
        return $this;
    }

    /**
    * Gets specifiedFileType
    *  字符总数不能超过512,当file_type_setting等于specific_file时为必选，其余情况为空， 由大小写字母和数字构成，文件类型用竖线分隔，例如jpg|mp4，只有在必选情况下才会对该字段做校验。
    *
    * @return string|null
    */
    public function getSpecifiedFileType()
    {
        return $this->container['specifiedFileType'];
    }

    /**
    * Sets specifiedFileType
    *
    * @param string|null $specifiedFileType 字符总数不能超过512,当file_type_setting等于specific_file时为必选，其余情况为空， 由大小写字母和数字构成，文件类型用竖线分隔，例如jpg|mp4，只有在必选情况下才会对该字段做校验。
    *
    * @return $this
    */
    public function setSpecifiedFileType($specifiedFileType)
    {
        $this->container['specifiedFileType'] = $specifiedFileType;
        return $this;
    }

    /**
    * Gets reserveArgsSetting
    *  设置用户请求中需要参与鉴权的参数，可选reserve_all_args（保留所有URL参数）、reserve_specific_args（保留指定URL参数）、ignore_all_args（忽略所有URL参数）。
    *
    * @return string
    */
    public function getReserveArgsSetting()
    {
        return $this->container['reserveArgsSetting'];
    }

    /**
    * Sets reserveArgsSetting
    *
    * @param string $reserveArgsSetting 设置用户请求中需要参与鉴权的参数，可选reserve_all_args（保留所有URL参数）、reserve_specific_args（保留指定URL参数）、ignore_all_args（忽略所有URL参数）。
    *
    * @return $this
    */
    public function setReserveArgsSetting($reserveArgsSetting)
    {
        $this->container['reserveArgsSetting'] = $reserveArgsSetting;
        return $this;
    }

    /**
    * Gets reserveArgs
    *  当reserve_args_setting等于reserve_specific_args时为必选，其余情况为空，要保留的参数，多个参数用竖线分隔：key1|key2。
    *
    * @return string|null
    */
    public function getReserveArgs()
    {
        return $this->container['reserveArgs'];
    }

    /**
    * Sets reserveArgs
    *
    * @param string|null $reserveArgs 当reserve_args_setting等于reserve_specific_args时为必选，其余情况为空，要保留的参数，多个参数用竖线分隔：key1|key2。
    *
    * @return $this
    */
    public function setReserveArgs($reserveArgs)
    {
        $this->container['reserveArgs'] = $reserveArgs;
        return $this;
    }

    /**
    * Gets addCustomArgsRules
    *  URL鉴权参数
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\CustomArgs[]|null
    */
    public function getAddCustomArgsRules()
    {
        return $this->container['addCustomArgsRules'];
    }

    /**
    * Sets addCustomArgsRules
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\CustomArgs[]|null $addCustomArgsRules URL鉴权参数
    *
    * @return $this
    */
    public function setAddCustomArgsRules($addCustomArgsRules)
    {
        $this->container['addCustomArgsRules'] = $addCustomArgsRules;
        return $this;
    }

    /**
    * Gets reserveHeadersSetting
    *  设置用户请求中参与鉴权请求头，可选reserve_all_headers（保留所有请求头参数）、reserve_specific_headers（保留指定请求头参数）、ignore_all_headers（忽略所有请求头参数）。
    *
    * @return string
    */
    public function getReserveHeadersSetting()
    {
        return $this->container['reserveHeadersSetting'];
    }

    /**
    * Sets reserveHeadersSetting
    *
    * @param string $reserveHeadersSetting 设置用户请求中参与鉴权请求头，可选reserve_all_headers（保留所有请求头参数）、reserve_specific_headers（保留指定请求头参数）、ignore_all_headers（忽略所有请求头参数）。
    *
    * @return $this
    */
    public function setReserveHeadersSetting($reserveHeadersSetting)
    {
        $this->container['reserveHeadersSetting'] = $reserveHeadersSetting;
        return $this;
    }

    /**
    * Gets addCustomHeadersRules
    *  请求头鉴权参数
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\CustomArgs[]|null
    */
    public function getAddCustomHeadersRules()
    {
        return $this->container['addCustomHeadersRules'];
    }

    /**
    * Sets addCustomHeadersRules
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\CustomArgs[]|null $addCustomHeadersRules 请求头鉴权参数
    *
    * @return $this
    */
    public function setAddCustomHeadersRules($addCustomHeadersRules)
    {
        $this->container['addCustomHeadersRules'] = $addCustomHeadersRules;
        return $this;
    }

    /**
    * Gets authSuccessStatus
    *  设置鉴权成功时远程鉴权服务器返回给CDN节点的状态码。取值范围：2xx/3xx。
    *
    * @return string
    */
    public function getAuthSuccessStatus()
    {
        return $this->container['authSuccessStatus'];
    }

    /**
    * Sets authSuccessStatus
    *
    * @param string $authSuccessStatus 设置鉴权成功时远程鉴权服务器返回给CDN节点的状态码。取值范围：2xx/3xx。
    *
    * @return $this
    */
    public function setAuthSuccessStatus($authSuccessStatus)
    {
        $this->container['authSuccessStatus'] = $authSuccessStatus;
        return $this;
    }

    /**
    * Gets authFailedStatus
    *  设置鉴权失败时远程鉴权服务器返回给CDN节点的状态码。取值范围：4xx/5xx。
    *
    * @return string
    */
    public function getAuthFailedStatus()
    {
        return $this->container['authFailedStatus'];
    }

    /**
    * Sets authFailedStatus
    *
    * @param string $authFailedStatus 设置鉴权失败时远程鉴权服务器返回给CDN节点的状态码。取值范围：4xx/5xx。
    *
    * @return $this
    */
    public function setAuthFailedStatus($authFailedStatus)
    {
        $this->container['authFailedStatus'] = $authFailedStatus;
        return $this;
    }

    /**
    * Gets responseStatus
    *  设置鉴权失败时CDN节点返回给用户的状态码。取值范围：2xx/3xx/4xx/5xx。
    *
    * @return string
    */
    public function getResponseStatus()
    {
        return $this->container['responseStatus'];
    }

    /**
    * Sets responseStatus
    *
    * @param string $responseStatus 设置鉴权失败时CDN节点返回给用户的状态码。取值范围：2xx/3xx/4xx/5xx。
    *
    * @return $this
    */
    public function setResponseStatus($responseStatus)
    {
        $this->container['responseStatus'] = $responseStatus;
        return $this;
    }

    /**
    * Gets timeout
    *  设置鉴权超时时间，即从CDN转发鉴权请求开始，到CDN节点收到远程鉴权服务器返回的结果的时间。单位为毫秒，值为0或50-3000。
    *
    * @return int
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int $timeout 设置鉴权超时时间，即从CDN转发鉴权请求开始，到CDN节点收到远程鉴权服务器返回的结果的时间。单位为毫秒，值为0或50-3000。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets timeoutAction
    *  设置鉴权超时后，CDN节点如何处理用户请求。 pass(鉴权失败放过)：鉴权超时后允许用户请求，返回对应的资源。 forbid(鉴权失败拒绝)：鉴权超时后拒绝用户请求，返回配置的响应自定义状态码给用户。
    *
    * @return string
    */
    public function getTimeoutAction()
    {
        return $this->container['timeoutAction'];
    }

    /**
    * Sets timeoutAction
    *
    * @param string $timeoutAction 设置鉴权超时后，CDN节点如何处理用户请求。 pass(鉴权失败放过)：鉴权超时后允许用户请求，返回对应的资源。 forbid(鉴权失败拒绝)：鉴权超时后拒绝用户请求，返回配置的响应自定义状态码给用户。
    *
    * @return $this
    */
    public function setTimeoutAction($timeoutAction)
    {
        $this->container['timeoutAction'] = $timeoutAction;
        return $this;
    }

    /**
    * Gets reserveHeaders
    *  当reserve_headers_setting等于reserve_specific_headers时为必选，其余情况为空，要保留的请求头，多个请求头用竖线分隔：key1|key2。
    *
    * @return string|null
    */
    public function getReserveHeaders()
    {
        return $this->container['reserveHeaders'];
    }

    /**
    * Sets reserveHeaders
    *
    * @param string|null $reserveHeaders 当reserve_headers_setting等于reserve_specific_headers时为必选，其余情况为空，要保留的请求头，多个请求头用竖线分隔：key1|key2。
    *
    * @return $this
    */
    public function setReserveHeaders($reserveHeaders)
    {
        $this->container['reserveHeaders'] = $reserveHeaders;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

