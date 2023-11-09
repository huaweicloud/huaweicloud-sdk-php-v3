<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiVersionResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiVersionResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * versionId  API历史版本的ID
    * versionNo  API的版本号
    * apiId  API编号
    * envId  发布的环境编号
    * envName  发布的环境名称
    * remark  发布描述
    * publishTime  发布时间
    * status  版本状态 - 1：当前生效中的版本 - 2：未生效的版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'versionId' => 'string',
            'versionNo' => 'string',
            'apiId' => 'string',
            'envId' => 'string',
            'envName' => 'string',
            'remark' => 'string',
            'publishTime' => '\DateTime',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * versionId  API历史版本的ID
    * versionNo  API的版本号
    * apiId  API编号
    * envId  发布的环境编号
    * envName  发布的环境名称
    * remark  发布描述
    * publishTime  发布时间
    * status  版本状态 - 1：当前生效中的版本 - 2：未生效的版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'versionId' => null,
        'versionNo' => null,
        'apiId' => null,
        'envId' => null,
        'envName' => null,
        'remark' => null,
        'publishTime' => 'date-time',
        'status' => 'int32'
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
    * versionId  API历史版本的ID
    * versionNo  API的版本号
    * apiId  API编号
    * envId  发布的环境编号
    * envName  发布的环境名称
    * remark  发布描述
    * publishTime  发布时间
    * status  版本状态 - 1：当前生效中的版本 - 2：未生效的版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'versionId' => 'version_id',
            'versionNo' => 'version_no',
            'apiId' => 'api_id',
            'envId' => 'env_id',
            'envName' => 'env_name',
            'remark' => 'remark',
            'publishTime' => 'publish_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * versionId  API历史版本的ID
    * versionNo  API的版本号
    * apiId  API编号
    * envId  发布的环境编号
    * envName  发布的环境名称
    * remark  发布描述
    * publishTime  发布时间
    * status  版本状态 - 1：当前生效中的版本 - 2：未生效的版本
    *
    * @var string[]
    */
    protected static $setters = [
            'versionId' => 'setVersionId',
            'versionNo' => 'setVersionNo',
            'apiId' => 'setApiId',
            'envId' => 'setEnvId',
            'envName' => 'setEnvName',
            'remark' => 'setRemark',
            'publishTime' => 'setPublishTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * versionId  API历史版本的ID
    * versionNo  API的版本号
    * apiId  API编号
    * envId  发布的环境编号
    * envName  发布的环境名称
    * remark  发布描述
    * publishTime  发布时间
    * status  版本状态 - 1：当前生效中的版本 - 2：未生效的版本
    *
    * @var string[]
    */
    protected static $getters = [
            'versionId' => 'getVersionId',
            'versionNo' => 'getVersionNo',
            'apiId' => 'getApiId',
            'envId' => 'getEnvId',
            'envName' => 'getEnvName',
            'remark' => 'getRemark',
            'publishTime' => 'getPublishTime',
            'status' => 'getStatus'
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
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_1,
            self::STATUS_2,
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
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['versionNo'] = isset($data['versionNo']) ? $data['versionNo'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['publishTime'] = isset($data['publishTime']) ? $data['publishTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets versionId
    *  API历史版本的ID
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
    * @param string|null $versionId API历史版本的ID
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
        return $this;
    }

    /**
    * Gets versionNo
    *  API的版本号
    *
    * @return string|null
    */
    public function getVersionNo()
    {
        return $this->container['versionNo'];
    }

    /**
    * Sets versionNo
    *
    * @param string|null $versionNo API的版本号
    *
    * @return $this
    */
    public function setVersionNo($versionNo)
    {
        $this->container['versionNo'] = $versionNo;
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
    * Gets envName
    *  发布的环境名称
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName 发布的环境名称
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
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
    * Gets status
    *  版本状态 - 1：当前生效中的版本 - 2：未生效的版本
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 版本状态 - 1：当前生效中的版本 - 2：未生效的版本
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

