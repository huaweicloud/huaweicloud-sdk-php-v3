<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BusinessNodeModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BusinessNodeModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * default  默认应用。
    * displayName  应用展示名称。
    * epsId  企业项目的id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * id  应用id。
    * innerDomainId  内部租户id。
    * isDefault  是否是默认的应用。
    * name  应用的英文名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'default' => 'bool',
            'displayName' => 'string',
            'epsId' => 'string',
            'gmtCreate' => '\DateTime',
            'gmtModify' => '\DateTime',
            'id' => 'int',
            'innerDomainId' => 'int',
            'isDefault' => 'bool',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * default  默认应用。
    * displayName  应用展示名称。
    * epsId  企业项目的id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * id  应用id。
    * innerDomainId  内部租户id。
    * isDefault  是否是默认的应用。
    * name  应用的英文名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'default' => null,
        'displayName' => null,
        'epsId' => null,
        'gmtCreate' => 'date',
        'gmtModify' => 'date',
        'id' => 'int64',
        'innerDomainId' => 'int32',
        'isDefault' => null,
        'name' => null
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
    * default  默认应用。
    * displayName  应用展示名称。
    * epsId  企业项目的id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * id  应用id。
    * innerDomainId  内部租户id。
    * isDefault  是否是默认的应用。
    * name  应用的英文名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'default' => 'default',
            'displayName' => 'display_name',
            'epsId' => 'eps_id',
            'gmtCreate' => 'gmt_create',
            'gmtModify' => 'gmt_modify',
            'id' => 'id',
            'innerDomainId' => 'inner_domain_id',
            'isDefault' => 'is_default',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * default  默认应用。
    * displayName  应用展示名称。
    * epsId  企业项目的id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * id  应用id。
    * innerDomainId  内部租户id。
    * isDefault  是否是默认的应用。
    * name  应用的英文名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'default' => 'setDefault',
            'displayName' => 'setDisplayName',
            'epsId' => 'setEpsId',
            'gmtCreate' => 'setGmtCreate',
            'gmtModify' => 'setGmtModify',
            'id' => 'setId',
            'innerDomainId' => 'setInnerDomainId',
            'isDefault' => 'setIsDefault',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * default  默认应用。
    * displayName  应用展示名称。
    * epsId  企业项目的id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * id  应用id。
    * innerDomainId  内部租户id。
    * isDefault  是否是默认的应用。
    * name  应用的英文名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'default' => 'getDefault',
            'displayName' => 'getDisplayName',
            'epsId' => 'getEpsId',
            'gmtCreate' => 'getGmtCreate',
            'gmtModify' => 'getGmtModify',
            'id' => 'getId',
            'innerDomainId' => 'getInnerDomainId',
            'isDefault' => 'getIsDefault',
            'name' => 'getName'
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
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['gmtCreate'] = isset($data['gmtCreate']) ? $data['gmtCreate'] : null;
        $this->container['gmtModify'] = isset($data['gmtModify']) ? $data['gmtModify'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['innerDomainId'] = isset($data['innerDomainId']) ? $data['innerDomainId'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
    * Gets default
    *  默认应用。
    *
    * @return bool|null
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param bool|null $default 默认应用。
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
        return $this;
    }

    /**
    * Gets displayName
    *  应用展示名称。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 应用展示名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets epsId
    *  企业项目的id。
    *
    * @return string|null
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string|null $epsId 企业项目的id。
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
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
    * Gets id
    *  应用id。
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
    * @param int|null $id 应用id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets innerDomainId
    *  内部租户id。
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
    * @param int|null $innerDomainId 内部租户id。
    *
    * @return $this
    */
    public function setInnerDomainId($innerDomainId)
    {
        $this->container['innerDomainId'] = $innerDomainId;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否是默认的应用。
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault 是否是默认的应用。
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets name
    *  应用的英文名称。
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
    * @param string|null $name 应用的英文名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

