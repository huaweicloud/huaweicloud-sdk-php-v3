<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CmdbTagEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CmdbTagEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  环境标签名称。
    * businessId  应用id。
    * uuid  UUID。
    * descp  描述信息。
    * creatorId  创建者id。
    * envIdList  环境id列表。
    * id  环境标签id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'businessId' => 'int',
            'uuid' => 'string',
            'descp' => 'string',
            'creatorId' => 'int',
            'envIdList' => 'int[]',
            'id' => 'int',
            'gmtCreate' => 'string',
            'gmtModify' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  环境标签名称。
    * businessId  应用id。
    * uuid  UUID。
    * descp  描述信息。
    * creatorId  创建者id。
    * envIdList  环境id列表。
    * id  环境标签id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'businessId' => 'int64',
        'uuid' => null,
        'descp' => null,
        'creatorId' => 'int64',
        'envIdList' => 'int64',
        'id' => 'int64',
        'gmtCreate' => null,
        'gmtModify' => null
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
    * name  环境标签名称。
    * businessId  应用id。
    * uuid  UUID。
    * descp  描述信息。
    * creatorId  创建者id。
    * envIdList  环境id列表。
    * id  环境标签id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'businessId' => 'business_id',
            'uuid' => 'uuid',
            'descp' => 'descp',
            'creatorId' => 'creator_id',
            'envIdList' => 'env_id_list',
            'id' => 'id',
            'gmtCreate' => 'gmt_create',
            'gmtModify' => 'gmt_modify'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  环境标签名称。
    * businessId  应用id。
    * uuid  UUID。
    * descp  描述信息。
    * creatorId  创建者id。
    * envIdList  环境id列表。
    * id  环境标签id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'businessId' => 'setBusinessId',
            'uuid' => 'setUuid',
            'descp' => 'setDescp',
            'creatorId' => 'setCreatorId',
            'envIdList' => 'setEnvIdList',
            'id' => 'setId',
            'gmtCreate' => 'setGmtCreate',
            'gmtModify' => 'setGmtModify'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  环境标签名称。
    * businessId  应用id。
    * uuid  UUID。
    * descp  描述信息。
    * creatorId  创建者id。
    * envIdList  环境id列表。
    * id  环境标签id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'businessId' => 'getBusinessId',
            'uuid' => 'getUuid',
            'descp' => 'getDescp',
            'creatorId' => 'getCreatorId',
            'envIdList' => 'getEnvIdList',
            'id' => 'getId',
            'gmtCreate' => 'getGmtCreate',
            'gmtModify' => 'getGmtModify'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['descp'] = isset($data['descp']) ? $data['descp'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['envIdList'] = isset($data['envIdList']) ? $data['envIdList'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['gmtCreate'] = isset($data['gmtCreate']) ? $data['gmtCreate'] : null;
        $this->container['gmtModify'] = isset($data['gmtModify']) ? $data['gmtModify'] : null;
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
    * Gets name
    *  环境标签名称。
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
    * @param string|null $name 环境标签名称。
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
    * Gets uuid
    *  UUID。
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid UUID。
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets descp
    *  描述信息。
    *
    * @return string|null
    */
    public function getDescp()
    {
        return $this->container['descp'];
    }

    /**
    * Sets descp
    *
    * @param string|null $descp 描述信息。
    *
    * @return $this
    */
    public function setDescp($descp)
    {
        $this->container['descp'] = $descp;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建者id。
    *
    * @return int|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param int|null $creatorId 创建者id。
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets envIdList
    *  环境id列表。
    *
    * @return int[]|null
    */
    public function getEnvIdList()
    {
        return $this->container['envIdList'];
    }

    /**
    * Sets envIdList
    *
    * @param int[]|null $envIdList 环境id列表。
    *
    * @return $this
    */
    public function setEnvIdList($envIdList)
    {
        $this->container['envIdList'] = $envIdList;
        return $this;
    }

    /**
    * Gets id
    *  环境标签id。
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
    * @param int|null $id 环境标签id。
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
    * @return string|null
    */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
    * Sets gmtCreate
    *
    * @param string|null $gmtCreate 创建时间。
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
    * @return string|null
    */
    public function getGmtModify()
    {
        return $this->container['gmtModify'];
    }

    /**
    * Sets gmtModify
    *
    * @param string|null $gmtModify 修改时间。
    *
    * @return $this
    */
    public function setGmtModify($gmtModify)
    {
        $this->container['gmtModify'] = $gmtModify;
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

