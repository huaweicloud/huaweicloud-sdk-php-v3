<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkMethod  **参数解释：** 健康检查方式：HTTP 或者 EXEC（命令行）。 **约束限制：** 不涉及。 **取值范围：** - HTTP：超文本传输协议。 - EXEC：命令行。 **默认取值：** 不涉及。
    * cmd  **参数解释：** 当健康检查方式为EXEC时，配置的命令行。 **约束限制：** 字符长度限制[0, 1024]，不能包含字符：#~^$|%&*<>()'\"[]{} **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * url  **参数解释：** 当健康检查方式为HTTP 时，配置的请求地址。 **约束限制：** 字符长度限制[0, 1024]，首字符为/，后续字符可以是：字母 数字 中划线 下划线 / : **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * protocol  **参数解释：** 连接协议。默认HTTP。 **约束限制：** 不涉及。 **取值范围：** - HTTPS：超文本传输协议安全版。 - HTTP：超文本传输协议。 - WSS：网络通信协议安全版。 - WS：网络通信协议。 **默认取值：** 不涉及。
    * initialDelaySeconds  **参数解释：** 执行首次探测时，应该等待的时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 默认值为30。
    * timeoutSeconds  **参数解释：** 执行探测的超时时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为30秒。
    * periodSeconds  **参数解释：** 执行健康检查的周期时间，执行探测的频率。默认是10秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为10秒。
    * failureThreshold  **参数解释：** 探测成功后，至少连续探测失败多少次才被认定为失败。默认是3。最小值是1。 **约束限制：** 不涉及。 **取值范围：** 最小值为1。 **默认取值：** 默认值为3。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkMethod' => 'string',
            'cmd' => 'string',
            'url' => 'string',
            'protocol' => 'string',
            'initialDelaySeconds' => 'int',
            'timeoutSeconds' => 'int',
            'periodSeconds' => 'int',
            'failureThreshold' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkMethod  **参数解释：** 健康检查方式：HTTP 或者 EXEC（命令行）。 **约束限制：** 不涉及。 **取值范围：** - HTTP：超文本传输协议。 - EXEC：命令行。 **默认取值：** 不涉及。
    * cmd  **参数解释：** 当健康检查方式为EXEC时，配置的命令行。 **约束限制：** 字符长度限制[0, 1024]，不能包含字符：#~^$|%&*<>()'\"[]{} **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * url  **参数解释：** 当健康检查方式为HTTP 时，配置的请求地址。 **约束限制：** 字符长度限制[0, 1024]，首字符为/，后续字符可以是：字母 数字 中划线 下划线 / : **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * protocol  **参数解释：** 连接协议。默认HTTP。 **约束限制：** 不涉及。 **取值范围：** - HTTPS：超文本传输协议安全版。 - HTTP：超文本传输协议。 - WSS：网络通信协议安全版。 - WS：网络通信协议。 **默认取值：** 不涉及。
    * initialDelaySeconds  **参数解释：** 执行首次探测时，应该等待的时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 默认值为30。
    * timeoutSeconds  **参数解释：** 执行探测的超时时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为30秒。
    * periodSeconds  **参数解释：** 执行健康检查的周期时间，执行探测的频率。默认是10秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为10秒。
    * failureThreshold  **参数解释：** 探测成功后，至少连续探测失败多少次才被认定为失败。默认是3。最小值是1。 **约束限制：** 不涉及。 **取值范围：** 最小值为1。 **默认取值：** 默认值为3。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkMethod' => null,
        'cmd' => null,
        'url' => null,
        'protocol' => null,
        'initialDelaySeconds' => 'int32',
        'timeoutSeconds' => 'int32',
        'periodSeconds' => 'int32',
        'failureThreshold' => 'int32'
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
    * checkMethod  **参数解释：** 健康检查方式：HTTP 或者 EXEC（命令行）。 **约束限制：** 不涉及。 **取值范围：** - HTTP：超文本传输协议。 - EXEC：命令行。 **默认取值：** 不涉及。
    * cmd  **参数解释：** 当健康检查方式为EXEC时，配置的命令行。 **约束限制：** 字符长度限制[0, 1024]，不能包含字符：#~^$|%&*<>()'\"[]{} **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * url  **参数解释：** 当健康检查方式为HTTP 时，配置的请求地址。 **约束限制：** 字符长度限制[0, 1024]，首字符为/，后续字符可以是：字母 数字 中划线 下划线 / : **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * protocol  **参数解释：** 连接协议。默认HTTP。 **约束限制：** 不涉及。 **取值范围：** - HTTPS：超文本传输协议安全版。 - HTTP：超文本传输协议。 - WSS：网络通信协议安全版。 - WS：网络通信协议。 **默认取值：** 不涉及。
    * initialDelaySeconds  **参数解释：** 执行首次探测时，应该等待的时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 默认值为30。
    * timeoutSeconds  **参数解释：** 执行探测的超时时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为30秒。
    * periodSeconds  **参数解释：** 执行健康检查的周期时间，执行探测的频率。默认是10秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为10秒。
    * failureThreshold  **参数解释：** 探测成功后，至少连续探测失败多少次才被认定为失败。默认是3。最小值是1。 **约束限制：** 不涉及。 **取值范围：** 最小值为1。 **默认取值：** 默认值为3。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkMethod' => 'check_method',
            'cmd' => 'cmd',
            'url' => 'url',
            'protocol' => 'protocol',
            'initialDelaySeconds' => 'initial_delay_seconds',
            'timeoutSeconds' => 'timeout_seconds',
            'periodSeconds' => 'period_seconds',
            'failureThreshold' => 'failure_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkMethod  **参数解释：** 健康检查方式：HTTP 或者 EXEC（命令行）。 **约束限制：** 不涉及。 **取值范围：** - HTTP：超文本传输协议。 - EXEC：命令行。 **默认取值：** 不涉及。
    * cmd  **参数解释：** 当健康检查方式为EXEC时，配置的命令行。 **约束限制：** 字符长度限制[0, 1024]，不能包含字符：#~^$|%&*<>()'\"[]{} **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * url  **参数解释：** 当健康检查方式为HTTP 时，配置的请求地址。 **约束限制：** 字符长度限制[0, 1024]，首字符为/，后续字符可以是：字母 数字 中划线 下划线 / : **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * protocol  **参数解释：** 连接协议。默认HTTP。 **约束限制：** 不涉及。 **取值范围：** - HTTPS：超文本传输协议安全版。 - HTTP：超文本传输协议。 - WSS：网络通信协议安全版。 - WS：网络通信协议。 **默认取值：** 不涉及。
    * initialDelaySeconds  **参数解释：** 执行首次探测时，应该等待的时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 默认值为30。
    * timeoutSeconds  **参数解释：** 执行探测的超时时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为30秒。
    * periodSeconds  **参数解释：** 执行健康检查的周期时间，执行探测的频率。默认是10秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为10秒。
    * failureThreshold  **参数解释：** 探测成功后，至少连续探测失败多少次才被认定为失败。默认是3。最小值是1。 **约束限制：** 不涉及。 **取值范围：** 最小值为1。 **默认取值：** 默认值为3。
    *
    * @var string[]
    */
    protected static $setters = [
            'checkMethod' => 'setCheckMethod',
            'cmd' => 'setCmd',
            'url' => 'setUrl',
            'protocol' => 'setProtocol',
            'initialDelaySeconds' => 'setInitialDelaySeconds',
            'timeoutSeconds' => 'setTimeoutSeconds',
            'periodSeconds' => 'setPeriodSeconds',
            'failureThreshold' => 'setFailureThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkMethod  **参数解释：** 健康检查方式：HTTP 或者 EXEC（命令行）。 **约束限制：** 不涉及。 **取值范围：** - HTTP：超文本传输协议。 - EXEC：命令行。 **默认取值：** 不涉及。
    * cmd  **参数解释：** 当健康检查方式为EXEC时，配置的命令行。 **约束限制：** 字符长度限制[0, 1024]，不能包含字符：#~^$|%&*<>()'\"[]{} **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * url  **参数解释：** 当健康检查方式为HTTP 时，配置的请求地址。 **约束限制：** 字符长度限制[0, 1024]，首字符为/，后续字符可以是：字母 数字 中划线 下划线 / : **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * protocol  **参数解释：** 连接协议。默认HTTP。 **约束限制：** 不涉及。 **取值范围：** - HTTPS：超文本传输协议安全版。 - HTTP：超文本传输协议。 - WSS：网络通信协议安全版。 - WS：网络通信协议。 **默认取值：** 不涉及。
    * initialDelaySeconds  **参数解释：** 执行首次探测时，应该等待的时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 默认值为30。
    * timeoutSeconds  **参数解释：** 执行探测的超时时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为30秒。
    * periodSeconds  **参数解释：** 执行健康检查的周期时间，执行探测的频率。默认是10秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为10秒。
    * failureThreshold  **参数解释：** 探测成功后，至少连续探测失败多少次才被认定为失败。默认是3。最小值是1。 **约束限制：** 不涉及。 **取值范围：** 最小值为1。 **默认取值：** 默认值为3。
    *
    * @var string[]
    */
    protected static $getters = [
            'checkMethod' => 'getCheckMethod',
            'cmd' => 'getCmd',
            'url' => 'getUrl',
            'protocol' => 'getProtocol',
            'initialDelaySeconds' => 'getInitialDelaySeconds',
            'timeoutSeconds' => 'getTimeoutSeconds',
            'periodSeconds' => 'getPeriodSeconds',
            'failureThreshold' => 'getFailureThreshold'
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
        $this->container['checkMethod'] = isset($data['checkMethod']) ? $data['checkMethod'] : null;
        $this->container['cmd'] = isset($data['cmd']) ? $data['cmd'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['initialDelaySeconds'] = isset($data['initialDelaySeconds']) ? $data['initialDelaySeconds'] : null;
        $this->container['timeoutSeconds'] = isset($data['timeoutSeconds']) ? $data['timeoutSeconds'] : null;
        $this->container['periodSeconds'] = isset($data['periodSeconds']) ? $data['periodSeconds'] : null;
        $this->container['failureThreshold'] = isset($data['failureThreshold']) ? $data['failureThreshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['initialDelaySeconds'] === null) {
            $invalidProperties[] = "'initialDelaySeconds' can't be null";
        }
        if ($this->container['timeoutSeconds'] === null) {
            $invalidProperties[] = "'timeoutSeconds' can't be null";
        }
        if ($this->container['periodSeconds'] === null) {
            $invalidProperties[] = "'periodSeconds' can't be null";
        }
        if ($this->container['failureThreshold'] === null) {
            $invalidProperties[] = "'failureThreshold' can't be null";
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
    * Gets checkMethod
    *  **参数解释：** 健康检查方式：HTTP 或者 EXEC（命令行）。 **约束限制：** 不涉及。 **取值范围：** - HTTP：超文本传输协议。 - EXEC：命令行。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getCheckMethod()
    {
        return $this->container['checkMethod'];
    }

    /**
    * Sets checkMethod
    *
    * @param string|null $checkMethod **参数解释：** 健康检查方式：HTTP 或者 EXEC（命令行）。 **约束限制：** 不涉及。 **取值范围：** - HTTP：超文本传输协议。 - EXEC：命令行。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCheckMethod($checkMethod)
    {
        $this->container['checkMethod'] = $checkMethod;
        return $this;
    }

    /**
    * Gets cmd
    *  **参数解释：** 当健康检查方式为EXEC时，配置的命令行。 **约束限制：** 字符长度限制[0, 1024]，不能包含字符：#~^$|%&*<>()'\"[]{} **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getCmd()
    {
        return $this->container['cmd'];
    }

    /**
    * Sets cmd
    *
    * @param string|null $cmd **参数解释：** 当健康检查方式为EXEC时，配置的命令行。 **约束限制：** 字符长度限制[0, 1024]，不能包含字符：#~^$|%&*<>()'\"[]{} **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCmd($cmd)
    {
        $this->container['cmd'] = $cmd;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释：** 当健康检查方式为HTTP 时，配置的请求地址。 **约束限制：** 字符长度限制[0, 1024]，首字符为/，后续字符可以是：字母 数字 中划线 下划线 / : **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url **参数解释：** 当健康检查方式为HTTP 时，配置的请求地址。 **约束限制：** 字符长度限制[0, 1024]，首字符为/，后续字符可以是：字母 数字 中划线 下划线 / : **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释：** 连接协议。默认HTTP。 **约束限制：** 不涉及。 **取值范围：** - HTTPS：超文本传输协议安全版。 - HTTP：超文本传输协议。 - WSS：网络通信协议安全版。 - WS：网络通信协议。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol **参数解释：** 连接协议。默认HTTP。 **约束限制：** 不涉及。 **取值范围：** - HTTPS：超文本传输协议安全版。 - HTTP：超文本传输协议。 - WSS：网络通信协议安全版。 - WS：网络通信协议。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets initialDelaySeconds
    *  **参数解释：** 执行首次探测时，应该等待的时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 默认值为30。
    *
    * @return int
    */
    public function getInitialDelaySeconds()
    {
        return $this->container['initialDelaySeconds'];
    }

    /**
    * Sets initialDelaySeconds
    *
    * @param int $initialDelaySeconds **参数解释：** 执行首次探测时，应该等待的时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 默认值为30。
    *
    * @return $this
    */
    public function setInitialDelaySeconds($initialDelaySeconds)
    {
        $this->container['initialDelaySeconds'] = $initialDelaySeconds;
        return $this;
    }

    /**
    * Gets timeoutSeconds
    *  **参数解释：** 执行探测的超时时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为30秒。
    *
    * @return int
    */
    public function getTimeoutSeconds()
    {
        return $this->container['timeoutSeconds'];
    }

    /**
    * Sets timeoutSeconds
    *
    * @param int $timeoutSeconds **参数解释：** 执行探测的超时时间，默认30秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为30秒。
    *
    * @return $this
    */
    public function setTimeoutSeconds($timeoutSeconds)
    {
        $this->container['timeoutSeconds'] = $timeoutSeconds;
        return $this;
    }

    /**
    * Gets periodSeconds
    *  **参数解释：** 执行健康检查的周期时间，执行探测的频率。默认是10秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为10秒。
    *
    * @return int
    */
    public function getPeriodSeconds()
    {
        return $this->container['periodSeconds'];
    }

    /**
    * Sets periodSeconds
    *
    * @param int $periodSeconds **参数解释：** 执行健康检查的周期时间，执行探测的频率。默认是10秒，最小1秒。 **约束限制：** 不涉及。 **取值范围：** 最小值为1秒。 **默认取值：** 默认值为10秒。
    *
    * @return $this
    */
    public function setPeriodSeconds($periodSeconds)
    {
        $this->container['periodSeconds'] = $periodSeconds;
        return $this;
    }

    /**
    * Gets failureThreshold
    *  **参数解释：** 探测成功后，至少连续探测失败多少次才被认定为失败。默认是3。最小值是1。 **约束限制：** 不涉及。 **取值范围：** 最小值为1。 **默认取值：** 默认值为3。
    *
    * @return int
    */
    public function getFailureThreshold()
    {
        return $this->container['failureThreshold'];
    }

    /**
    * Sets failureThreshold
    *
    * @param int $failureThreshold **参数解释：** 探测成功后，至少连续探测失败多少次才被认定为失败。默认是3。最小值是1。 **约束限制：** 不涉及。 **取值范围：** 最小值为1。 **默认取值：** 默认值为3。
    *
    * @return $this
    */
    public function setFailureThreshold($failureThreshold)
    {
        $this->container['failureThreshold'] = $failureThreshold;
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

