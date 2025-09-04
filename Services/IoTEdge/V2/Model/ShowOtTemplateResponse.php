<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOtTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOtTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tplId  模板id
    * name  模板名称
    * description  描述
    * datasourceMeta  数据源元数据
    * pointMeta  点位表元数据
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tplId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'datasourceMeta' => 'object',
            'pointMeta' => 'object',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tplId  模板id
    * name  模板名称
    * description  描述
    * datasourceMeta  数据源元数据
    * pointMeta  点位表元数据
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tplId' => null,
        'name' => null,
        'description' => null,
        'datasourceMeta' => null,
        'pointMeta' => null,
        'createTime' => null,
        'updateTime' => null
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
    * tplId  模板id
    * name  模板名称
    * description  描述
    * datasourceMeta  数据源元数据
    * pointMeta  点位表元数据
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tplId' => 'tpl_id',
            'name' => 'name',
            'description' => 'description',
            'datasourceMeta' => 'datasource_meta',
            'pointMeta' => 'point_meta',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tplId  模板id
    * name  模板名称
    * description  描述
    * datasourceMeta  数据源元数据
    * pointMeta  点位表元数据
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $setters = [
            'tplId' => 'setTplId',
            'name' => 'setName',
            'description' => 'setDescription',
            'datasourceMeta' => 'setDatasourceMeta',
            'pointMeta' => 'setPointMeta',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tplId  模板id
    * name  模板名称
    * description  描述
    * datasourceMeta  数据源元数据
    * pointMeta  点位表元数据
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $getters = [
            'tplId' => 'getTplId',
            'name' => 'getName',
            'description' => 'getDescription',
            'datasourceMeta' => 'getDatasourceMeta',
            'pointMeta' => 'getPointMeta',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['tplId'] = isset($data['tplId']) ? $data['tplId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['datasourceMeta'] = isset($data['datasourceMeta']) ? $data['datasourceMeta'] : null;
        $this->container['pointMeta'] = isset($data['pointMeta']) ? $data['pointMeta'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tplId']) && (mb_strlen($this->container['tplId']) > 64)) {
                $invalidProperties[] = "invalid value for 'tplId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tplId']) && (mb_strlen($this->container['tplId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tplId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets tplId
    *  模板id
    *
    * @return string|null
    */
    public function getTplId()
    {
        return $this->container['tplId'];
    }

    /**
    * Sets tplId
    *
    * @param string|null $tplId 模板id
    *
    * @return $this
    */
    public function setTplId($tplId)
    {
        $this->container['tplId'] = $tplId;
        return $this;
    }

    /**
    * Gets name
    *  模板名称
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
    * @param string|null $name 模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets datasourceMeta
    *  数据源元数据
    *
    * @return object|null
    */
    public function getDatasourceMeta()
    {
        return $this->container['datasourceMeta'];
    }

    /**
    * Sets datasourceMeta
    *
    * @param object|null $datasourceMeta 数据源元数据
    *
    * @return $this
    */
    public function setDatasourceMeta($datasourceMeta)
    {
        $this->container['datasourceMeta'] = $datasourceMeta;
        return $this;
    }

    /**
    * Gets pointMeta
    *  点位表元数据
    *
    * @return object|null
    */
    public function getPointMeta()
    {
        return $this->container['pointMeta'];
    }

    /**
    * Sets pointMeta
    *
    * @param object|null $pointMeta 点位表元数据
    *
    * @return $this
    */
    public function setPointMeta($pointMeta)
    {
        $this->container['pointMeta'] = $pointMeta;
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

