<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateOrDeletePublishRecordForApiV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateOrDeletePublishRecordForApiV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishId  发布记录的ID
    * apiId  API编号
    * apiName  API名称
    * envId  发布的环境编号
    * remark  发布描述
    * publishTime  发布时间
    * versionId  在线的版本号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishId' => 'string',
            'apiId' => 'string',
            'apiName' => 'string',
            'envId' => 'string',
            'remark' => 'string',
            'publishTime' => '\DateTime',
            'versionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishId  发布记录的ID
    * apiId  API编号
    * apiName  API名称
    * envId  发布的环境编号
    * remark  发布描述
    * publishTime  发布时间
    * versionId  在线的版本号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishId' => null,
        'apiId' => null,
        'apiName' => null,
        'envId' => null,
        'remark' => null,
        'publishTime' => 'date-time',
        'versionId' => null
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
    * publishId  发布记录的ID
    * apiId  API编号
    * apiName  API名称
    * envId  发布的环境编号
    * remark  发布描述
    * publishTime  发布时间
    * versionId  在线的版本号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishId' => 'publish_id',
            'apiId' => 'api_id',
            'apiName' => 'api_name',
            'envId' => 'env_id',
            'remark' => 'remark',
            'publishTime' => 'publish_time',
            'versionId' => 'version_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishId  发布记录的ID
    * apiId  API编号
    * apiName  API名称
    * envId  发布的环境编号
    * remark  发布描述
    * publishTime  发布时间
    * versionId  在线的版本号
    *
    * @var string[]
    */
    protected static $setters = [
            'publishId' => 'setPublishId',
            'apiId' => 'setApiId',
            'apiName' => 'setApiName',
            'envId' => 'setEnvId',
            'remark' => 'setRemark',
            'publishTime' => 'setPublishTime',
            'versionId' => 'setVersionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishId  发布记录的ID
    * apiId  API编号
    * apiName  API名称
    * envId  发布的环境编号
    * remark  发布描述
    * publishTime  发布时间
    * versionId  在线的版本号
    *
    * @var string[]
    */
    protected static $getters = [
            'publishId' => 'getPublishId',
            'apiId' => 'getApiId',
            'apiName' => 'getApiName',
            'envId' => 'getEnvId',
            'remark' => 'getRemark',
            'publishTime' => 'getPublishTime',
            'versionId' => 'getVersionId'
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
        $this->container['publishId'] = isset($data['publishId']) ? $data['publishId'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['apiName'] = isset($data['apiName']) ? $data['apiName'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['publishTime'] = isset($data['publishTime']) ? $data['publishTime'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets publishId
    *  发布记录的ID
    *
    * @return string|null
    */
    public function getPublishId()
    {
        return $this->container['publishId'];
    }

    /**
    * Sets publishId
    *
    * @param string|null $publishId 发布记录的ID
    *
    * @return $this
    */
    public function setPublishId($publishId)
    {
        $this->container['publishId'] = $publishId;
        return $this;
    }

    /**
    * Gets apiId
    *  API编号
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId API编号
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets apiName
    *  API名称
    *
    * @return string|null
    */
    public function getApiName()
    {
        return $this->container['apiName'];
    }

    /**
    * Sets apiName
    *
    * @param string|null $apiName API名称
    *
    * @return $this
    */
    public function setApiName($apiName)
    {
        $this->container['apiName'] = $apiName;
        return $this;
    }

    /**
    * Gets envId
    *  发布的环境编号
    *
    * @return string|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string|null $envId 发布的环境编号
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets remark
    *  发布描述
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 发布描述
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets publishTime
    *  发布时间
    *
    * @return \DateTime|null
    */
    public function getPublishTime()
    {
        return $this->container['publishTime'];
    }

    /**
    * Sets publishTime
    *
    * @param \DateTime|null $publishTime 发布时间
    *
    * @return $this
    */
    public function setPublishTime($publishTime)
    {
        $this->container['publishTime'] = $publishTime;
        return $this;
    }

    /**
    * Gets versionId
    *  在线的版本号
    *
    * @return string|null
    */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
    * Sets versionId
    *
    * @param string|null $versionId 在线的版本号
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
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

