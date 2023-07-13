<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAppResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAppResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appName  app名称
    * appId  应用id
    * state  state
    * scope  RTC覆盖范围。  取值如下：    - DOMESTIC：国内范围。   - OVERSEA：海外范围。   - GLOBAL：全球范围。
    * tenantName  账号名
    * domain  域名，App对应域名
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * authentication  authentication
    * callbacks  callbacks
    * autoRecordMode  autoRecordMode
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appName' => 'string',
            'appId' => 'string',
            'state' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\AppState',
            'scope' => 'string',
            'tenantName' => 'string',
            'domain' => 'string',
            'createTime' => 'string',
            'authentication' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\AppAuth',
            'callbacks' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\AppCallbacks',
            'autoRecordMode' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\AppAutoRecordMode',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appName  app名称
    * appId  应用id
    * state  state
    * scope  RTC覆盖范围。  取值如下：    - DOMESTIC：国内范围。   - OVERSEA：海外范围。   - GLOBAL：全球范围。
    * tenantName  账号名
    * domain  域名，App对应域名
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * authentication  authentication
    * callbacks  callbacks
    * autoRecordMode  autoRecordMode
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appName' => null,
        'appId' => null,
        'state' => null,
        'scope' => null,
        'tenantName' => null,
        'domain' => null,
        'createTime' => null,
        'authentication' => null,
        'callbacks' => null,
        'autoRecordMode' => null,
        'xRequestId' => null
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
    * appName  app名称
    * appId  应用id
    * state  state
    * scope  RTC覆盖范围。  取值如下：    - DOMESTIC：国内范围。   - OVERSEA：海外范围。   - GLOBAL：全球范围。
    * tenantName  账号名
    * domain  域名，App对应域名
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * authentication  authentication
    * callbacks  callbacks
    * autoRecordMode  autoRecordMode
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appName' => 'app_name',
            'appId' => 'app_id',
            'state' => 'state',
            'scope' => 'scope',
            'tenantName' => 'tenant_name',
            'domain' => 'domain',
            'createTime' => 'create_time',
            'authentication' => 'authentication',
            'callbacks' => 'callbacks',
            'autoRecordMode' => 'auto_record_mode',
            'xRequestId' => 'X-request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appName  app名称
    * appId  应用id
    * state  state
    * scope  RTC覆盖范围。  取值如下：    - DOMESTIC：国内范围。   - OVERSEA：海外范围。   - GLOBAL：全球范围。
    * tenantName  账号名
    * domain  域名，App对应域名
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * authentication  authentication
    * callbacks  callbacks
    * autoRecordMode  autoRecordMode
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'appName' => 'setAppName',
            'appId' => 'setAppId',
            'state' => 'setState',
            'scope' => 'setScope',
            'tenantName' => 'setTenantName',
            'domain' => 'setDomain',
            'createTime' => 'setCreateTime',
            'authentication' => 'setAuthentication',
            'callbacks' => 'setCallbacks',
            'autoRecordMode' => 'setAutoRecordMode',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appName  app名称
    * appId  应用id
    * state  state
    * scope  RTC覆盖范围。  取值如下：    - DOMESTIC：国内范围。   - OVERSEA：海外范围。   - GLOBAL：全球范围。
    * tenantName  账号名
    * domain  域名，App对应域名
    * createTime  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    * authentication  authentication
    * callbacks  callbacks
    * autoRecordMode  autoRecordMode
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'appName' => 'getAppName',
            'appId' => 'getAppId',
            'state' => 'getState',
            'scope' => 'getScope',
            'tenantName' => 'getTenantName',
            'domain' => 'getDomain',
            'createTime' => 'getCreateTime',
            'authentication' => 'getAuthentication',
            'callbacks' => 'getCallbacks',
            'autoRecordMode' => 'getAutoRecordMode',
            'xRequestId' => 'getXRequestId'
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
    const SCOPE_DOMESTIC = 'DOMESTIC';
    const SCOPE_OVERSEA = 'OVERSEA';
    const SCOPE__GLOBAL = 'GLOBAL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_DOMESTIC,
            self::SCOPE_OVERSEA,
            self::SCOPE__GLOBAL,
        ];
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
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['authentication'] = isset($data['authentication']) ? $data['authentication'] : null;
        $this->container['callbacks'] = isset($data['callbacks']) ? $data['callbacks'] : null;
        $this->container['autoRecordMode'] = isset($data['autoRecordMode']) ? $data['autoRecordMode'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 256)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 32)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getScopeAllowableValues();
                if (!is_null($this->container['scope']) && !in_array($this->container['scope'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scope', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) > 32)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scope']) && (mb_strlen($this->container['scope']) < 1)) {
                $invalidProperties[] = "invalid value for 'scope', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) > 253)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be smaller than or equal to 253.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 253)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 253.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 1.";
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
    * Gets appName
    *  app名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName app名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appId
    *  应用id
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用id
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets state
    *  state
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\AppState|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\AppState|null $state state
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets scope
    *  RTC覆盖范围。  取值如下：    - DOMESTIC：国内范围。   - OVERSEA：海外范围。   - GLOBAL：全球范围。
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope RTC覆盖范围。  取值如下：    - DOMESTIC：国内范围。   - OVERSEA：海外范围。   - GLOBAL：全球范围。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets tenantName
    *  账号名
    *
    * @return string|null
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string|null $tenantName 账号名
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets domain
    *  域名，App对应域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 域名，App对应域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets authentication
    *  authentication
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\AppAuth|null
    */
    public function getAuthentication()
    {
        return $this->container['authentication'];
    }

    /**
    * Sets authentication
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\AppAuth|null $authentication authentication
    *
    * @return $this
    */
    public function setAuthentication($authentication)
    {
        $this->container['authentication'] = $authentication;
        return $this;
    }

    /**
    * Gets callbacks
    *  callbacks
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\AppCallbacks|null
    */
    public function getCallbacks()
    {
        return $this->container['callbacks'];
    }

    /**
    * Sets callbacks
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\AppCallbacks|null $callbacks callbacks
    *
    * @return $this
    */
    public function setCallbacks($callbacks)
    {
        $this->container['callbacks'] = $callbacks;
        return $this;
    }

    /**
    * Gets autoRecordMode
    *  autoRecordMode
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\AppAutoRecordMode|null
    */
    public function getAutoRecordMode()
    {
        return $this->container['autoRecordMode'];
    }

    /**
    * Sets autoRecordMode
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\AppAutoRecordMode|null $autoRecordMode autoRecordMode
    *
    * @return $this
    */
    public function setAutoRecordMode($autoRecordMode)
    {
        $this->container['autoRecordMode'] = $autoRecordMode;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

