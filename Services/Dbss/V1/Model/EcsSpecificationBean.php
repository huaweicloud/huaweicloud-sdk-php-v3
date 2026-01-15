<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EcsSpecificationBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EcsSpecificationBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * azs  ECS规格所在的可用区集合
    * id  规格ID
    * level  规格等级，支持的等级以局点配置为准。 - entry：入门版 - low：基础版 - medium：专业版 - high：高级版
    * name  规格名称
    * proxy  规格可添加的数据库数量
    * ram  内存
    * vcpus  CPU
    * azType  可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'azs' => 'string[]',
            'id' => 'string',
            'level' => 'string',
            'name' => 'string',
            'proxy' => 'int',
            'ram' => 'int',
            'vcpus' => 'int',
            'azType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * azs  ECS规格所在的可用区集合
    * id  规格ID
    * level  规格等级，支持的等级以局点配置为准。 - entry：入门版 - low：基础版 - medium：专业版 - high：高级版
    * name  规格名称
    * proxy  规格可添加的数据库数量
    * ram  内存
    * vcpus  CPU
    * azType  可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'azs' => null,
        'id' => null,
        'level' => null,
        'name' => null,
        'proxy' => 'int32',
        'ram' => 'int32',
        'vcpus' => 'int32',
        'azType' => null
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
    * azs  ECS规格所在的可用区集合
    * id  规格ID
    * level  规格等级，支持的等级以局点配置为准。 - entry：入门版 - low：基础版 - medium：专业版 - high：高级版
    * name  规格名称
    * proxy  规格可添加的数据库数量
    * ram  内存
    * vcpus  CPU
    * azType  可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'azs' => 'azs',
            'id' => 'id',
            'level' => 'level',
            'name' => 'name',
            'proxy' => 'proxy',
            'ram' => 'ram',
            'vcpus' => 'vcpus',
            'azType' => 'az_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * azs  ECS规格所在的可用区集合
    * id  规格ID
    * level  规格等级，支持的等级以局点配置为准。 - entry：入门版 - low：基础版 - medium：专业版 - high：高级版
    * name  规格名称
    * proxy  规格可添加的数据库数量
    * ram  内存
    * vcpus  CPU
    * azType  可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    *
    * @var string[]
    */
    protected static $setters = [
            'azs' => 'setAzs',
            'id' => 'setId',
            'level' => 'setLevel',
            'name' => 'setName',
            'proxy' => 'setProxy',
            'ram' => 'setRam',
            'vcpus' => 'setVcpus',
            'azType' => 'setAzType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * azs  ECS规格所在的可用区集合
    * id  规格ID
    * level  规格等级，支持的等级以局点配置为准。 - entry：入门版 - low：基础版 - medium：专业版 - high：高级版
    * name  规格名称
    * proxy  规格可添加的数据库数量
    * ram  内存
    * vcpus  CPU
    * azType  可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    *
    * @var string[]
    */
    protected static $getters = [
            'azs' => 'getAzs',
            'id' => 'getId',
            'level' => 'getLevel',
            'name' => 'getName',
            'proxy' => 'getProxy',
            'ram' => 'getRam',
            'vcpus' => 'getVcpus',
            'azType' => 'getAzType'
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
        $this->container['azs'] = isset($data['azs']) ? $data['azs'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['azType'] = isset($data['azType']) ? $data['azType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['azs'] === null) {
            $invalidProperties[] = "'azs' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['proxy'] === null) {
            $invalidProperties[] = "'proxy' can't be null";
        }
        if ($this->container['ram'] === null) {
            $invalidProperties[] = "'ram' can't be null";
        }
        if ($this->container['vcpus'] === null) {
            $invalidProperties[] = "'vcpus' can't be null";
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
    * Gets azs
    *  ECS规格所在的可用区集合
    *
    * @return string[]
    */
    public function getAzs()
    {
        return $this->container['azs'];
    }

    /**
    * Sets azs
    *
    * @param string[] $azs ECS规格所在的可用区集合
    *
    * @return $this
    */
    public function setAzs($azs)
    {
        $this->container['azs'] = $azs;
        return $this;
    }

    /**
    * Gets id
    *  规格ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 规格ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets level
    *  规格等级，支持的等级以局点配置为准。 - entry：入门版 - low：基础版 - medium：专业版 - high：高级版
    *
    * @return string
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string $level 规格等级，支持的等级以局点配置为准。 - entry：入门版 - low：基础版 - medium：专业版 - high：高级版
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets name
    *  规格名称
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
    * @param string $name 规格名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets proxy
    *  规格可添加的数据库数量
    *
    * @return int
    */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
    * Sets proxy
    *
    * @param int $proxy 规格可添加的数据库数量
    *
    * @return $this
    */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;
        return $this;
    }

    /**
    * Gets ram
    *  内存
    *
    * @return int
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param int $ram 内存
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets vcpus
    *  CPU
    *
    * @return int
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param int $vcpus CPU
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets azType
    *  可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    *
    * @return string|null
    */
    public function getAzType()
    {
        return $this->container['azType'];
    }

    /**
    * Sets azType
    *
    * @param string|null $azType 可用区类型 - DEDICATED：大网 - DEC：边缘小站 - EDGE：专属
    *
    * @return $this
    */
    public function setAzType($azType)
    {
        $this->container['azType'] = $azType;
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

