<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBusinessDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBusinessDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  应用id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * default  是否是默认的应用。
    * displayName  应用的英文名称。
    * name  应用的展示名称。
    * isDefault  是否是默认的应用。
    * innerDomainId  内部租户id。
    * epsId  企业项目的id。
    * creatorId  创建者的userId。
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
            'default' => 'bool',
            'displayName' => 'string',
            'name' => 'string',
            'isDefault' => 'bool',
            'innerDomainId' => 'int',
            'epsId' => 'string',
            'creatorId' => 'int',
            'descp' => 'string',
            'createTime' => 'string',
            'modifyTime' => 'string',
            'creatorName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  应用id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * default  是否是默认的应用。
    * displayName  应用的英文名称。
    * name  应用的展示名称。
    * isDefault  是否是默认的应用。
    * innerDomainId  内部租户id。
    * epsId  企业项目的id。
    * creatorId  创建者的userId。
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
        'default' => null,
        'displayName' => null,
        'name' => null,
        'isDefault' => null,
        'innerDomainId' => 'int32',
        'epsId' => null,
        'creatorId' => 'int64',
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
    * id  应用id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * default  是否是默认的应用。
    * displayName  应用的英文名称。
    * name  应用的展示名称。
    * isDefault  是否是默认的应用。
    * innerDomainId  内部租户id。
    * epsId  企业项目的id。
    * creatorId  创建者的userId。
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
            'default' => 'default',
            'displayName' => 'display_name',
            'name' => 'name',
            'isDefault' => 'is_default',
            'innerDomainId' => 'inner_domain_id',
            'epsId' => 'eps_id',
            'creatorId' => 'creator_id',
            'descp' => 'descp',
            'createTime' => 'create_time',
            'modifyTime' => 'modify_time',
            'creatorName' => 'creator_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  应用id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * default  是否是默认的应用。
    * displayName  应用的英文名称。
    * name  应用的展示名称。
    * isDefault  是否是默认的应用。
    * innerDomainId  内部租户id。
    * epsId  企业项目的id。
    * creatorId  创建者的userId。
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
            'default' => 'setDefault',
            'displayName' => 'setDisplayName',
            'name' => 'setName',
            'isDefault' => 'setIsDefault',
            'innerDomainId' => 'setInnerDomainId',
            'epsId' => 'setEpsId',
            'creatorId' => 'setCreatorId',
            'descp' => 'setDescp',
            'createTime' => 'setCreateTime',
            'modifyTime' => 'setModifyTime',
            'creatorName' => 'setCreatorName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  应用id。
    * gmtCreate  创建时间。
    * gmtModify  修改时间。
    * default  是否是默认的应用。
    * displayName  应用的英文名称。
    * name  应用的展示名称。
    * isDefault  是否是默认的应用。
    * innerDomainId  内部租户id。
    * epsId  企业项目的id。
    * creatorId  创建者的userId。
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
            'default' => 'getDefault',
            'displayName' => 'getDisplayName',
            'name' => 'getName',
            'isDefault' => 'getIsDefault',
            'innerDomainId' => 'getInnerDomainId',
            'epsId' => 'getEpsId',
            'creatorId' => 'getCreatorId',
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
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['innerDomainId'] = isset($data['innerDomainId']) ? $data['innerDomainId'] : null;
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
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
    * Gets default
    *  是否是默认的应用。
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
    * @param bool|null $default 是否是默认的应用。
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
    *  应用的英文名称。
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
    * @param string|null $displayName 应用的英文名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets name
    *  应用的展示名称。
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
    * @param string|null $name 应用的展示名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

