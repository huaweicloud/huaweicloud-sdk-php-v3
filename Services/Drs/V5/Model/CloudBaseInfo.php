<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudBaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudBaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  区域ID，当数据库实例类型为ecs（华为云ECS自建数据库），cloud（华为云数据库）时为必填项。获取方法请参见地区和终端节点。 注意：当该Region下存在子项目时，Region ID为区域项目ID与子项目ID，由“_”下划线拼接，例如：cn-north-4_abc。
    * projectId  租户在某一Region下的Project ID。 获取方法请参见获取项目ID。
    * azCode  数据库所在可用分区（AZ）名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'projectId' => 'string',
            'azCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  区域ID，当数据库实例类型为ecs（华为云ECS自建数据库），cloud（华为云数据库）时为必填项。获取方法请参见地区和终端节点。 注意：当该Region下存在子项目时，Region ID为区域项目ID与子项目ID，由“_”下划线拼接，例如：cn-north-4_abc。
    * projectId  租户在某一Region下的Project ID。 获取方法请参见获取项目ID。
    * azCode  数据库所在可用分区（AZ）名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'projectId' => null,
        'azCode' => null
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
    * region  区域ID，当数据库实例类型为ecs（华为云ECS自建数据库），cloud（华为云数据库）时为必填项。获取方法请参见地区和终端节点。 注意：当该Region下存在子项目时，Region ID为区域项目ID与子项目ID，由“_”下划线拼接，例如：cn-north-4_abc。
    * projectId  租户在某一Region下的Project ID。 获取方法请参见获取项目ID。
    * azCode  数据库所在可用分区（AZ）名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'projectId' => 'project_id',
            'azCode' => 'az_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  区域ID，当数据库实例类型为ecs（华为云ECS自建数据库），cloud（华为云数据库）时为必填项。获取方法请参见地区和终端节点。 注意：当该Region下存在子项目时，Region ID为区域项目ID与子项目ID，由“_”下划线拼接，例如：cn-north-4_abc。
    * projectId  租户在某一Region下的Project ID。 获取方法请参见获取项目ID。
    * azCode  数据库所在可用分区（AZ）名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'projectId' => 'setProjectId',
            'azCode' => 'setAzCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  区域ID，当数据库实例类型为ecs（华为云ECS自建数据库），cloud（华为云数据库）时为必填项。获取方法请参见地区和终端节点。 注意：当该Region下存在子项目时，Region ID为区域项目ID与子项目ID，由“_”下划线拼接，例如：cn-north-4_abc。
    * projectId  租户在某一Region下的Project ID。 获取方法请参见获取项目ID。
    * azCode  数据库所在可用分区（AZ）名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'projectId' => 'getProjectId',
            'azCode' => 'getAzCode'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
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
    * Gets region
    *  区域ID，当数据库实例类型为ecs（华为云ECS自建数据库），cloud（华为云数据库）时为必填项。获取方法请参见地区和终端节点。 注意：当该Region下存在子项目时，Region ID为区域项目ID与子项目ID，由“_”下划线拼接，例如：cn-north-4_abc。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 区域ID，当数据库实例类型为ecs（华为云ECS自建数据库），cloud（华为云数据库）时为必填项。获取方法请参见地区和终端节点。 注意：当该Region下存在子项目时，Region ID为区域项目ID与子项目ID，由“_”下划线拼接，例如：cn-north-4_abc。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets projectId
    *  租户在某一Region下的Project ID。 获取方法请参见获取项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 租户在某一Region下的Project ID。 获取方法请参见获取项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets azCode
    *  数据库所在可用分区（AZ）名称。
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 数据库所在可用分区（AZ）名称。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
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

