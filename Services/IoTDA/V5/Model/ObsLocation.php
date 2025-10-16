<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObsLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObsLocation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionName  **参数说明**：OBS所在区域。您可以从[[地区和终端节点](https://developer.huaweicloud.com/endpoint?OBS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?OBS)](tag:hws_hk)中查询服务的终端节点。 **取值范围**：长度不超过256，只允许字母、数字、连接符（-）的组合。
    * bucketName  **参数说明**：OBS桶名称。 **取值范围**：长度最小为3，最大为63，只允许小写字母、数字、连接符（-）、英文点（.）的组合。
    * objectKey  **参数说明**：OBS对象名称(包含文件夹路径)。 **取值范围**：长度不超过1024。
    * signMethod  **参数说明**： **取值范围**：只支持SHA256,不携带默认为SHA256。
    * sign  **参数说明**：SHA256算法计算出的升级包签名值。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该签名给设备。 **取值范围**：长度为64，只允许大小写字母a到f、数字的组合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionName' => 'string',
            'bucketName' => 'string',
            'objectKey' => 'string',
            'signMethod' => 'string',
            'sign' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionName  **参数说明**：OBS所在区域。您可以从[[地区和终端节点](https://developer.huaweicloud.com/endpoint?OBS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?OBS)](tag:hws_hk)中查询服务的终端节点。 **取值范围**：长度不超过256，只允许字母、数字、连接符（-）的组合。
    * bucketName  **参数说明**：OBS桶名称。 **取值范围**：长度最小为3，最大为63，只允许小写字母、数字、连接符（-）、英文点（.）的组合。
    * objectKey  **参数说明**：OBS对象名称(包含文件夹路径)。 **取值范围**：长度不超过1024。
    * signMethod  **参数说明**： **取值范围**：只支持SHA256,不携带默认为SHA256。
    * sign  **参数说明**：SHA256算法计算出的升级包签名值。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该签名给设备。 **取值范围**：长度为64，只允许大小写字母a到f、数字的组合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionName' => null,
        'bucketName' => null,
        'objectKey' => null,
        'signMethod' => null,
        'sign' => null
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
    * regionName  **参数说明**：OBS所在区域。您可以从[[地区和终端节点](https://developer.huaweicloud.com/endpoint?OBS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?OBS)](tag:hws_hk)中查询服务的终端节点。 **取值范围**：长度不超过256，只允许字母、数字、连接符（-）的组合。
    * bucketName  **参数说明**：OBS桶名称。 **取值范围**：长度最小为3，最大为63，只允许小写字母、数字、连接符（-）、英文点（.）的组合。
    * objectKey  **参数说明**：OBS对象名称(包含文件夹路径)。 **取值范围**：长度不超过1024。
    * signMethod  **参数说明**： **取值范围**：只支持SHA256,不携带默认为SHA256。
    * sign  **参数说明**：SHA256算法计算出的升级包签名值。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该签名给设备。 **取值范围**：长度为64，只允许大小写字母a到f、数字的组合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionName' => 'region_name',
            'bucketName' => 'bucket_name',
            'objectKey' => 'object_key',
            'signMethod' => 'sign_method',
            'sign' => 'sign'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionName  **参数说明**：OBS所在区域。您可以从[[地区和终端节点](https://developer.huaweicloud.com/endpoint?OBS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?OBS)](tag:hws_hk)中查询服务的终端节点。 **取值范围**：长度不超过256，只允许字母、数字、连接符（-）的组合。
    * bucketName  **参数说明**：OBS桶名称。 **取值范围**：长度最小为3，最大为63，只允许小写字母、数字、连接符（-）、英文点（.）的组合。
    * objectKey  **参数说明**：OBS对象名称(包含文件夹路径)。 **取值范围**：长度不超过1024。
    * signMethod  **参数说明**： **取值范围**：只支持SHA256,不携带默认为SHA256。
    * sign  **参数说明**：SHA256算法计算出的升级包签名值。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该签名给设备。 **取值范围**：长度为64，只允许大小写字母a到f、数字的组合。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionName' => 'setRegionName',
            'bucketName' => 'setBucketName',
            'objectKey' => 'setObjectKey',
            'signMethod' => 'setSignMethod',
            'sign' => 'setSign'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionName  **参数说明**：OBS所在区域。您可以从[[地区和终端节点](https://developer.huaweicloud.com/endpoint?OBS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?OBS)](tag:hws_hk)中查询服务的终端节点。 **取值范围**：长度不超过256，只允许字母、数字、连接符（-）的组合。
    * bucketName  **参数说明**：OBS桶名称。 **取值范围**：长度最小为3，最大为63，只允许小写字母、数字、连接符（-）、英文点（.）的组合。
    * objectKey  **参数说明**：OBS对象名称(包含文件夹路径)。 **取值范围**：长度不超过1024。
    * signMethod  **参数说明**： **取值范围**：只支持SHA256,不携带默认为SHA256。
    * sign  **参数说明**：SHA256算法计算出的升级包签名值。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该签名给设备。 **取值范围**：长度为64，只允许大小写字母a到f、数字的组合。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionName' => 'getRegionName',
            'bucketName' => 'getBucketName',
            'objectKey' => 'getObjectKey',
            'signMethod' => 'getSignMethod',
            'sign' => 'getSign'
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
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['objectKey'] = isset($data['objectKey']) ? $data['objectKey'] : null;
        $this->container['signMethod'] = isset($data['signMethod']) ? $data['signMethod'] : null;
        $this->container['sign'] = isset($data['sign']) ? $data['sign'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regionName'] === null) {
            $invalidProperties[] = "'regionName' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9-]{1,256}$/", $this->container['regionName'])) {
                $invalidProperties[] = "invalid value for 'regionName', must be conform to the pattern /^[a-zA-Z0-9-]{1,256}$/.";
            }
        if ($this->container['bucketName'] === null) {
            $invalidProperties[] = "'bucketName' can't be null";
        }
            if (!preg_match("/^[a-z0-9.-]{3,63}$/", $this->container['bucketName'])) {
                $invalidProperties[] = "invalid value for 'bucketName', must be conform to the pattern /^[a-z0-9.-]{3,63}$/.";
            }
        if ($this->container['objectKey'] === null) {
            $invalidProperties[] = "'objectKey' can't be null";
        }
            if ((mb_strlen($this->container['objectKey']) > 1024)) {
                $invalidProperties[] = "invalid value for 'objectKey', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['objectKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'objectKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['signMethod']) && !preg_match("/(SHA256|MD5)/", $this->container['signMethod'])) {
                $invalidProperties[] = "invalid value for 'signMethod', must be conform to the pattern /(SHA256|MD5)/.";
            }
            if (!is_null($this->container['sign']) && !preg_match("/^(?:[a-fA-F0-9]{32}|[a-fA-F0-9]{64})$/", $this->container['sign'])) {
                $invalidProperties[] = "invalid value for 'sign', must be conform to the pattern /^(?:[a-fA-F0-9]{32}|[a-fA-F0-9]{64})$/.";
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
    * Gets regionName
    *  **参数说明**：OBS所在区域。您可以从[[地区和终端节点](https://developer.huaweicloud.com/endpoint?OBS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?OBS)](tag:hws_hk)中查询服务的终端节点。 **取值范围**：长度不超过256，只允许字母、数字、连接符（-）的组合。
    *
    * @return string
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string $regionName **参数说明**：OBS所在区域。您可以从[[地区和终端节点](https://developer.huaweicloud.com/endpoint?OBS)](tag:hws)[[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?OBS)](tag:hws_hk)中查询服务的终端节点。 **取值范围**：长度不超过256，只允许字母、数字、连接符（-）的组合。
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets bucketName
    *  **参数说明**：OBS桶名称。 **取值范围**：长度最小为3，最大为63，只允许小写字母、数字、连接符（-）、英文点（.）的组合。
    *
    * @return string
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string $bucketName **参数说明**：OBS桶名称。 **取值范围**：长度最小为3，最大为63，只允许小写字母、数字、连接符（-）、英文点（.）的组合。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets objectKey
    *  **参数说明**：OBS对象名称(包含文件夹路径)。 **取值范围**：长度不超过1024。
    *
    * @return string
    */
    public function getObjectKey()
    {
        return $this->container['objectKey'];
    }

    /**
    * Sets objectKey
    *
    * @param string $objectKey **参数说明**：OBS对象名称(包含文件夹路径)。 **取值范围**：长度不超过1024。
    *
    * @return $this
    */
    public function setObjectKey($objectKey)
    {
        $this->container['objectKey'] = $objectKey;
        return $this;
    }

    /**
    * Gets signMethod
    *  **参数说明**： **取值范围**：只支持SHA256,不携带默认为SHA256。
    *
    * @return string|null
    */
    public function getSignMethod()
    {
        return $this->container['signMethod'];
    }

    /**
    * Sets signMethod
    *
    * @param string|null $signMethod **参数说明**： **取值范围**：只支持SHA256,不携带默认为SHA256。
    *
    * @return $this
    */
    public function setSignMethod($signMethod)
    {
        $this->container['signMethod'] = $signMethod;
        return $this;
    }

    /**
    * Gets sign
    *  **参数说明**：SHA256算法计算出的升级包签名值。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该签名给设备。 **取值范围**：长度为64，只允许大小写字母a到f、数字的组合。
    *
    * @return string|null
    */
    public function getSign()
    {
        return $this->container['sign'];
    }

    /**
    * Sets sign
    *
    * @param string|null $sign **参数说明**：SHA256算法计算出的升级包签名值。添加该升级包完成，并创建升级任务后，物联网平台向设备下发升级通知时，会下发该签名给设备。 **取值范围**：长度为64，只允许大小写字母a到f、数字的组合。
    *
    * @return $this
    */
    public function setSign($sign)
    {
        $this->container['sign'] = $sign;
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

