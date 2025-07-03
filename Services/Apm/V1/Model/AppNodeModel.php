<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppNodeModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppNodeModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  组件id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * name  组件名称。
    * businessId  应用id。
    * subBusinessId  子应用id。
    * innerDomainId  租户id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'gmtCreate' => '\DateTime',
            'gmtModify' => '\DateTime',
            'name' => 'string',
            'businessId' => 'int',
            'subBusinessId' => 'int',
            'innerDomainId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  组件id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * name  组件名称。
    * businessId  应用id。
    * subBusinessId  子应用id。
    * innerDomainId  租户id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'gmtCreate' => 'date',
        'gmtModify' => 'date',
        'name' => null,
        'businessId' => 'int64',
        'subBusinessId' => 'int64',
        'innerDomainId' => 'int32'
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
    * id  组件id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * name  组件名称。
    * businessId  应用id。
    * subBusinessId  子应用id。
    * innerDomainId  租户id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'gmtCreate' => 'gmt_create',
            'gmtModify' => 'gmt_modify',
            'name' => 'name',
            'businessId' => 'business_id',
            'subBusinessId' => 'sub_business_id',
            'innerDomainId' => 'inner_domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  组件id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * name  组件名称。
    * businessId  应用id。
    * subBusinessId  子应用id。
    * innerDomainId  租户id。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'gmtCreate' => 'setGmtCreate',
            'gmtModify' => 'setGmtModify',
            'name' => 'setName',
            'businessId' => 'setBusinessId',
            'subBusinessId' => 'setSubBusinessId',
            'innerDomainId' => 'setInnerDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  组件id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * name  组件名称。
    * businessId  应用id。
    * subBusinessId  子应用id。
    * innerDomainId  租户id。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'gmtCreate' => 'getGmtCreate',
            'gmtModify' => 'getGmtModify',
            'name' => 'getName',
            'businessId' => 'getBusinessId',
            'subBusinessId' => 'getSubBusinessId',
            'innerDomainId' => 'getInnerDomainId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['gmtCreate'] = isset($data['gmtCreate']) ? $data['gmtCreate'] : null;
        $this->container['gmtModify'] = isset($data['gmtModify']) ? $data['gmtModify'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['subBusinessId'] = isset($data['subBusinessId']) ? $data['subBusinessId'] : null;
        $this->container['innerDomainId'] = isset($data['innerDomainId']) ? $data['innerDomainId'] : null;
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
    * Gets id
    *  组件id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 组件id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets gmtCreate
    *  创建时间。
    *
    * @return \DateTime|null
    */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
    * Sets gmtCreate
    *
    * @param \DateTime|null $gmtCreate 创建时间。
    *
    * @return $this
    */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;
        return $this;
    }

    /**
    * Gets gmtModify
    *  修改时间。
    *
    * @return \DateTime|null
    */
    public function getGmtModify()
    {
        return $this->container['gmtModify'];
    }

    /**
    * Sets gmtModify
    *
    * @param \DateTime|null $gmtModify 修改时间。
    *
    * @return $this
    */
    public function setGmtModify($gmtModify)
    {
        $this->container['gmtModify'] = $gmtModify;
        return $this;
    }

    /**
    * Gets name
    *  组件名称。
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
    * @param string|null $name 组件名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets businessId
    *  应用id。
    *
    * @return int|null
    */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
    * Sets businessId
    *
    * @param int|null $businessId 应用id。
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
        return $this;
    }

    /**
    * Gets subBusinessId
    *  子应用id。
    *
    * @return int|null
    */
    public function getSubBusinessId()
    {
        return $this->container['subBusinessId'];
    }

    /**
    * Sets subBusinessId
    *
    * @param int|null $subBusinessId 子应用id。
    *
    * @return $this
    */
    public function setSubBusinessId($subBusinessId)
    {
        $this->container['subBusinessId'] = $subBusinessId;
        return $this;
    }

    /**
    * Gets innerDomainId
    *  租户id。
    *
    * @return int|null
    */
    public function getInnerDomainId()
    {
        return $this->container['innerDomainId'];
    }

    /**
    * Sets innerDomainId
    *
    * @param int|null $innerDomainId 租户id。
    *
    * @return $this
    */
    public function setInnerDomainId($innerDomainId)
    {
        $this->container['innerDomainId'] = $innerDomainId;
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

