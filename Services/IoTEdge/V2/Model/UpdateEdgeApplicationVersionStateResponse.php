<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateEdgeApplicationVersionStateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateEdgeApplicationVersionStateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgeAppId  应用ID
    * name  应用名称
    * version  应用名称
    * sdkVersion  应用集成的边缘SDK版本
    * description  应用描述
    * deployType  部署类型docker|process
    * deployMultiInstance  是否允许部署多实例
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * state  应用版本状态
    * arch  架构
    * publishTime  发布时间
    * offShelfTime  下线时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edgeAppId' => 'string',
            'name' => 'string',
            'version' => 'string',
            'sdkVersion' => 'string',
            'description' => 'string',
            'deployType' => 'string',
            'deployMultiInstance' => 'bool',
            'createTime' => 'string',
            'updateTime' => 'string',
            'state' => 'string',
            'arch' => 'string[]',
            'publishTime' => 'string',
            'offShelfTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgeAppId  应用ID
    * name  应用名称
    * version  应用名称
    * sdkVersion  应用集成的边缘SDK版本
    * description  应用描述
    * deployType  部署类型docker|process
    * deployMultiInstance  是否允许部署多实例
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * state  应用版本状态
    * arch  架构
    * publishTime  发布时间
    * offShelfTime  下线时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edgeAppId' => null,
        'name' => null,
        'version' => null,
        'sdkVersion' => null,
        'description' => null,
        'deployType' => null,
        'deployMultiInstance' => null,
        'createTime' => null,
        'updateTime' => null,
        'state' => null,
        'arch' => null,
        'publishTime' => null,
        'offShelfTime' => null
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
    * edgeAppId  应用ID
    * name  应用名称
    * version  应用名称
    * sdkVersion  应用集成的边缘SDK版本
    * description  应用描述
    * deployType  部署类型docker|process
    * deployMultiInstance  是否允许部署多实例
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * state  应用版本状态
    * arch  架构
    * publishTime  发布时间
    * offShelfTime  下线时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edgeAppId' => 'edge_app_id',
            'name' => 'name',
            'version' => 'version',
            'sdkVersion' => 'sdk_version',
            'description' => 'description',
            'deployType' => 'deploy_type',
            'deployMultiInstance' => 'deploy_multi_instance',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'state' => 'state',
            'arch' => 'arch',
            'publishTime' => 'publish_time',
            'offShelfTime' => 'off_shelf_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgeAppId  应用ID
    * name  应用名称
    * version  应用名称
    * sdkVersion  应用集成的边缘SDK版本
    * description  应用描述
    * deployType  部署类型docker|process
    * deployMultiInstance  是否允许部署多实例
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * state  应用版本状态
    * arch  架构
    * publishTime  发布时间
    * offShelfTime  下线时间
    *
    * @var string[]
    */
    protected static $setters = [
            'edgeAppId' => 'setEdgeAppId',
            'name' => 'setName',
            'version' => 'setVersion',
            'sdkVersion' => 'setSdkVersion',
            'description' => 'setDescription',
            'deployType' => 'setDeployType',
            'deployMultiInstance' => 'setDeployMultiInstance',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'state' => 'setState',
            'arch' => 'setArch',
            'publishTime' => 'setPublishTime',
            'offShelfTime' => 'setOffShelfTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgeAppId  应用ID
    * name  应用名称
    * version  应用名称
    * sdkVersion  应用集成的边缘SDK版本
    * description  应用描述
    * deployType  部署类型docker|process
    * deployMultiInstance  是否允许部署多实例
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * state  应用版本状态
    * arch  架构
    * publishTime  发布时间
    * offShelfTime  下线时间
    *
    * @var string[]
    */
    protected static $getters = [
            'edgeAppId' => 'getEdgeAppId',
            'name' => 'getName',
            'version' => 'getVersion',
            'sdkVersion' => 'getSdkVersion',
            'description' => 'getDescription',
            'deployType' => 'getDeployType',
            'deployMultiInstance' => 'getDeployMultiInstance',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'state' => 'getState',
            'arch' => 'getArch',
            'publishTime' => 'getPublishTime',
            'offShelfTime' => 'getOffShelfTime'
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
    const STATE_DRAFT = 'DRAFT';
    const STATE_PUBLISHED = 'PUBLISHED';
    const STATE_OFF_SHELF = 'OFF_SHELF';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_DRAFT,
            self::STATE_PUBLISHED,
            self::STATE_OFF_SHELF,
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
        $this->container['edgeAppId'] = isset($data['edgeAppId']) ? $data['edgeAppId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['sdkVersion'] = isset($data['sdkVersion']) ? $data['sdkVersion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['deployMultiInstance'] = isset($data['deployMultiInstance']) ? $data['deployMultiInstance'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['publishTime'] = isset($data['publishTime']) ? $data['publishTime'] : null;
        $this->container['offShelfTime'] = isset($data['offShelfTime']) ? $data['offShelfTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['edgeAppId']) && (mb_strlen($this->container['edgeAppId']) > 32)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['edgeAppId']) && (mb_strlen($this->container['edgeAppId']) < 0)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sdkVersion']) && (mb_strlen($this->container['sdkVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'sdkVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sdkVersion']) && (mb_strlen($this->container['sdkVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'sdkVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sdkVersion']) && !preg_match("/^[A-Za-z0-9-_.]*$/", $this->container['sdkVersion'])) {
                $invalidProperties[] = "invalid value for 'sdkVersion', must be conform to the pattern /^[A-Za-z0-9-_.]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deployType']) && (mb_strlen($this->container['deployType']) > 64)) {
                $invalidProperties[] = "invalid value for 'deployType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['deployType']) && (mb_strlen($this->container['deployType']) < 0)) {
                $invalidProperties[] = "invalid value for 'deployType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['publishTime']) && (mb_strlen($this->container['publishTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'publishTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['publishTime']) && (mb_strlen($this->container['publishTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'publishTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offShelfTime']) && (mb_strlen($this->container['offShelfTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'offShelfTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['offShelfTime']) && (mb_strlen($this->container['offShelfTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'offShelfTime', the character length must be bigger than or equal to 0.";
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
    * Gets edgeAppId
    *  应用ID
    *
    * @return string|null
    */
    public function getEdgeAppId()
    {
        return $this->container['edgeAppId'];
    }

    /**
    * Sets edgeAppId
    *
    * @param string|null $edgeAppId 应用ID
    *
    * @return $this
    */
    public function setEdgeAppId($edgeAppId)
    {
        $this->container['edgeAppId'] = $edgeAppId;
        return $this;
    }

    /**
    * Gets name
    *  应用名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 应用名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets version
    *  应用名称
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 应用名称
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets sdkVersion
    *  应用集成的边缘SDK版本
    *
    * @return string|null
    */
    public function getSdkVersion()
    {
        return $this->container['sdkVersion'];
    }

    /**
    * Sets sdkVersion
    *
    * @param string|null $sdkVersion 应用集成的边缘SDK版本
    *
    * @return $this
    */
    public function setSdkVersion($sdkVersion)
    {
        $this->container['sdkVersion'] = $sdkVersion;
        return $this;
    }

    /**
    * Gets description
    *  应用描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 应用描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets deployType
    *  部署类型docker|process
    *
    * @return string|null
    */
    public function getDeployType()
    {
        return $this->container['deployType'];
    }

    /**
    * Sets deployType
    *
    * @param string|null $deployType 部署类型docker|process
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets deployMultiInstance
    *  是否允许部署多实例
    *
    * @return bool|null
    */
    public function getDeployMultiInstance()
    {
        return $this->container['deployMultiInstance'];
    }

    /**
    * Sets deployMultiInstance
    *
    * @param bool|null $deployMultiInstance 是否允许部署多实例
    *
    * @return $this
    */
    public function setDeployMultiInstance($deployMultiInstance)
    {
        $this->container['deployMultiInstance'] = $deployMultiInstance;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  最后一次修改时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 最后一次修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets state
    *  应用版本状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 应用版本状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets arch
    *  架构
    *
    * @return string[]|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string[]|null $arch 架构
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets publishTime
    *  发布时间
    *
    * @return string|null
    */
    public function getPublishTime()
    {
        return $this->container['publishTime'];
    }

    /**
    * Sets publishTime
    *
    * @param string|null $publishTime 发布时间
    *
    * @return $this
    */
    public function setPublishTime($publishTime)
    {
        $this->container['publishTime'] = $publishTime;
        return $this;
    }

    /**
    * Gets offShelfTime
    *  下线时间
    *
    * @return string|null
    */
    public function getOffShelfTime()
    {
        return $this->container['offShelfTime'];
    }

    /**
    * Sets offShelfTime
    *
    * @param string|null $offShelfTime 下线时间
    *
    * @return $this
    */
    public function setOffShelfTime($offShelfTime)
    {
        $this->container['offShelfTime'] = $offShelfTime;
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

