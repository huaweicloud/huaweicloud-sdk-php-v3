<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateOtTemplatesReqDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateOtTemplatesReqDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tplId  模板id
    * name  模板名称，允许中、数字、英文大小写、下划线、中划线
    * description  描述
    * datasourceMeta  数据源元数据
    * pointMeta  点位表元数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tplId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'datasourceMeta' => 'object',
            'pointMeta' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tplId  模板id
    * name  模板名称，允许中、数字、英文大小写、下划线、中划线
    * description  描述
    * datasourceMeta  数据源元数据
    * pointMeta  点位表元数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tplId' => null,
        'name' => null,
        'description' => null,
        'datasourceMeta' => null,
        'pointMeta' => null
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
    * name  模板名称，允许中、数字、英文大小写、下划线、中划线
    * description  描述
    * datasourceMeta  数据源元数据
    * pointMeta  点位表元数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tplId' => 'tpl_id',
            'name' => 'name',
            'description' => 'description',
            'datasourceMeta' => 'datasource_meta',
            'pointMeta' => 'point_meta'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tplId  模板id
    * name  模板名称，允许中、数字、英文大小写、下划线、中划线
    * description  描述
    * datasourceMeta  数据源元数据
    * pointMeta  点位表元数据
    *
    * @var string[]
    */
    protected static $setters = [
            'tplId' => 'setTplId',
            'name' => 'setName',
            'description' => 'setDescription',
            'datasourceMeta' => 'setDatasourceMeta',
            'pointMeta' => 'setPointMeta'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tplId  模板id
    * name  模板名称，允许中、数字、英文大小写、下划线、中划线
    * description  描述
    * datasourceMeta  数据源元数据
    * pointMeta  点位表元数据
    *
    * @var string[]
    */
    protected static $getters = [
            'tplId' => 'getTplId',
            'name' => 'getName',
            'description' => 'getDescription',
            'datasourceMeta' => 'getDatasourceMeta',
            'pointMeta' => 'getPointMeta'
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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tplId'] === null) {
            $invalidProperties[] = "'tplId' can't be null";
        }
            if ((mb_strlen($this->container['tplId']) > 64)) {
                $invalidProperties[] = "invalid value for 'tplId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['tplId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tplId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['tplId'])) {
                $invalidProperties[] = "invalid value for 'tplId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
        if ($this->container['datasourceMeta'] === null) {
            $invalidProperties[] = "'datasourceMeta' can't be null";
        }
        if ($this->container['pointMeta'] === null) {
            $invalidProperties[] = "'pointMeta' can't be null";
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
    * @return string
    */
    public function getTplId()
    {
        return $this->container['tplId'];
    }

    /**
    * Sets tplId
    *
    * @param string $tplId 模板id
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
    *  模板名称，允许中、数字、英文大小写、下划线、中划线
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 模板名称，允许中、数字、英文大小写、下划线、中划线
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
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 描述
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
    * @return object
    */
    public function getDatasourceMeta()
    {
        return $this->container['datasourceMeta'];
    }

    /**
    * Sets datasourceMeta
    *
    * @param object $datasourceMeta 数据源元数据
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
    * @return object
    */
    public function getPointMeta()
    {
        return $this->container['pointMeta'];
    }

    /**
    * Sets pointMeta
    *
    * @param object $pointMeta 点位表元数据
    *
    * @return $this
    */
    public function setPointMeta($pointMeta)
    {
        $this->container['pointMeta'] = $pointMeta;
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

