<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSubBusinessDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSubBusinessDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  子应用id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * parentId  父亲的子应用id。
    * name  子应用的英文名称。
    * displayName  子应用的展示名称。
    * businessId  所属应用id。
    * innerDomainId  内部租户id。
    * creatorId  创建者的userId。
    * uuid  应用的UUID。
    * descp  应用描述说明。
    * createTime  创建时间。
    * modifyTime  修改时间。
    * creatorName  创建者的用户名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'gmtCreate' => '\DateTime',
            'gmtModify' => '\DateTime',
            'parentId' => 'int',
            'name' => 'string',
            'displayName' => 'string',
            'businessId' => 'int',
            'innerDomainId' => 'int',
            'creatorId' => 'int',
            'uuid' => 'string',
            'descp' => 'string',
            'createTime' => 'string',
            'modifyTime' => 'string',
            'creatorName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  子应用id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * parentId  父亲的子应用id。
    * name  子应用的英文名称。
    * displayName  子应用的展示名称。
    * businessId  所属应用id。
    * innerDomainId  内部租户id。
    * creatorId  创建者的userId。
    * uuid  应用的UUID。
    * descp  应用描述说明。
    * createTime  创建时间。
    * modifyTime  修改时间。
    * creatorName  创建者的用户名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'gmtCreate' => 'date',
        'gmtModify' => 'date',
        'parentId' => 'int64',
        'name' => null,
        'displayName' => null,
        'businessId' => 'int64',
        'innerDomainId' => 'int32',
        'creatorId' => 'int64',
        'uuid' => null,
        'descp' => null,
        'createTime' => null,
        'modifyTime' => null,
        'creatorName' => null
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
    * id  子应用id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * parentId  父亲的子应用id。
    * name  子应用的英文名称。
    * displayName  子应用的展示名称。
    * businessId  所属应用id。
    * innerDomainId  内部租户id。
    * creatorId  创建者的userId。
    * uuid  应用的UUID。
    * descp  应用描述说明。
    * createTime  创建时间。
    * modifyTime  修改时间。
    * creatorName  创建者的用户名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'gmtCreate' => 'gmt_create',
            'gmtModify' => 'gmt_modify',
            'parentId' => 'parent_id',
            'name' => 'name',
            'displayName' => 'display_name',
            'businessId' => 'business_id',
            'innerDomainId' => 'inner_domain_id',
            'creatorId' => 'creator_id',
            'uuid' => 'uuid',
            'descp' => 'descp',
            'createTime' => 'create_time',
            'modifyTime' => 'modify_time',
            'creatorName' => 'creator_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  子应用id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * parentId  父亲的子应用id。
    * name  子应用的英文名称。
    * displayName  子应用的展示名称。
    * businessId  所属应用id。
    * innerDomainId  内部租户id。
    * creatorId  创建者的userId。
    * uuid  应用的UUID。
    * descp  应用描述说明。
    * createTime  创建时间。
    * modifyTime  修改时间。
    * creatorName  创建者的用户名。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'gmtCreate' => 'setGmtCreate',
            'gmtModify' => 'setGmtModify',
            'parentId' => 'setParentId',
            'name' => 'setName',
            'displayName' => 'setDisplayName',
            'businessId' => 'setBusinessId',
            'innerDomainId' => 'setInnerDomainId',
            'creatorId' => 'setCreatorId',
            'uuid' => 'setUuid',
            'descp' => 'setDescp',
            'createTime' => 'setCreateTime',
            'modifyTime' => 'setModifyTime',
            'creatorName' => 'setCreatorName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  子应用id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * parentId  父亲的子应用id。
    * name  子应用的英文名称。
    * displayName  子应用的展示名称。
    * businessId  所属应用id。
    * innerDomainId  内部租户id。
    * creatorId  创建者的userId。
    * uuid  应用的UUID。
    * descp  应用描述说明。
    * createTime  创建时间。
    * modifyTime  修改时间。
    * creatorName  创建者的用户名。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'gmtCreate' => 'getGmtCreate',
            'gmtModify' => 'getGmtModify',
            'parentId' => 'getParentId',
            'name' => 'getName',
            'displayName' => 'getDisplayName',
            'businessId' => 'getBusinessId',
            'innerDomainId' => 'getInnerDomainId',
            'creatorId' => 'getCreatorId',
            'uuid' => 'getUuid',
            'descp' => 'getDescp',
            'createTime' => 'getCreateTime',
            'modifyTime' => 'getModifyTime',
            'creatorName' => 'getCreatorName'
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
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['innerDomainId'] = isset($data['innerDomainId']) ? $data['innerDomainId'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['descp'] = isset($data['descp']) ? $data['descp'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['modifyTime'] = isset($data['modifyTime']) ? $data['modifyTime'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
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
    *  子应用id。
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
    * @param int|null $id 子应用id。
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
    * Gets parentId
    *  父亲的子应用id。
    *
    * @return int|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param int|null $parentId 父亲的子应用id。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets name
    *  子应用的英文名称。
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
    * @param string|null $name 子应用的英文名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets displayName
    *  子应用的展示名称。
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
    * @param string|null $displayName 子应用的展示名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets businessId
    *  所属应用id。
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
    * @param int|null $businessId 所属应用id。
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
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
    * Gets creatorId
    *  创建者的userId。
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
    * @param int|null $creatorId 创建者的userId。
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets uuid
    *  应用的UUID。
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
    * @param string|null $uuid 应用的UUID。
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
    *  应用描述说明。
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
    * @param string|null $descp 应用描述说明。
    *
    * @return $this
    */
    public function setDescp($descp)
    {
        $this->container['descp'] = $descp;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
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
    * @param string|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets modifyTime
    *  修改时间。
    *
    * @return string|null
    */
    public function getModifyTime()
    {
        return $this->container['modifyTime'];
    }

    /**
    * Sets modifyTime
    *
    * @param string|null $modifyTime 修改时间。
    *
    * @return $this
    */
    public function setModifyTime($modifyTime)
    {
        $this->container['modifyTime'] = $modifyTime;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建者的用户名。
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建者的用户名。
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
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

