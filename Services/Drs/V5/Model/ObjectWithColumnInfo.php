<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectWithColumnInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObjectWithColumnInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  本节点id
    * parentId  父节点id
    * type  节点类型
    * name  节点名称
    * aliasName  节点别名
    * notices  提示信息，例如提示库下表过多
    * extendInfo  扩展信息，例如提示有无数据,结构是否在目标库中存在
    * isSupportExpand  是否支持展开查询
    * hasColumnInfo  是否有列信息
    * isPreset  是否预置
    * tokenCount  token个数
    * isSent  是否已经下发给node
    * sentAliasName  下发给node的别名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'parentId' => 'string',
            'type' => 'string',
            'name' => 'string',
            'aliasName' => 'string',
            'notices' => 'string[]',
            'extendInfo' => 'string',
            'isSupportExpand' => 'bool',
            'hasColumnInfo' => 'bool',
            'isPreset' => 'bool',
            'tokenCount' => 'string',
            'isSent' => 'bool',
            'sentAliasName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  本节点id
    * parentId  父节点id
    * type  节点类型
    * name  节点名称
    * aliasName  节点别名
    * notices  提示信息，例如提示库下表过多
    * extendInfo  扩展信息，例如提示有无数据,结构是否在目标库中存在
    * isSupportExpand  是否支持展开查询
    * hasColumnInfo  是否有列信息
    * isPreset  是否预置
    * tokenCount  token个数
    * isSent  是否已经下发给node
    * sentAliasName  下发给node的别名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'parentId' => null,
        'type' => null,
        'name' => null,
        'aliasName' => null,
        'notices' => null,
        'extendInfo' => null,
        'isSupportExpand' => null,
        'hasColumnInfo' => null,
        'isPreset' => null,
        'tokenCount' => null,
        'isSent' => null,
        'sentAliasName' => null
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
    * id  本节点id
    * parentId  父节点id
    * type  节点类型
    * name  节点名称
    * aliasName  节点别名
    * notices  提示信息，例如提示库下表过多
    * extendInfo  扩展信息，例如提示有无数据,结构是否在目标库中存在
    * isSupportExpand  是否支持展开查询
    * hasColumnInfo  是否有列信息
    * isPreset  是否预置
    * tokenCount  token个数
    * isSent  是否已经下发给node
    * sentAliasName  下发给node的别名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'parentId' => 'parent_id',
            'type' => 'type',
            'name' => 'name',
            'aliasName' => 'alias_name',
            'notices' => 'notices',
            'extendInfo' => 'extend_info',
            'isSupportExpand' => 'is_support_expand',
            'hasColumnInfo' => 'has_column_info',
            'isPreset' => 'is_preset',
            'tokenCount' => 'token_count',
            'isSent' => 'is_sent',
            'sentAliasName' => 'sent_alias_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  本节点id
    * parentId  父节点id
    * type  节点类型
    * name  节点名称
    * aliasName  节点别名
    * notices  提示信息，例如提示库下表过多
    * extendInfo  扩展信息，例如提示有无数据,结构是否在目标库中存在
    * isSupportExpand  是否支持展开查询
    * hasColumnInfo  是否有列信息
    * isPreset  是否预置
    * tokenCount  token个数
    * isSent  是否已经下发给node
    * sentAliasName  下发给node的别名
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'parentId' => 'setParentId',
            'type' => 'setType',
            'name' => 'setName',
            'aliasName' => 'setAliasName',
            'notices' => 'setNotices',
            'extendInfo' => 'setExtendInfo',
            'isSupportExpand' => 'setIsSupportExpand',
            'hasColumnInfo' => 'setHasColumnInfo',
            'isPreset' => 'setIsPreset',
            'tokenCount' => 'setTokenCount',
            'isSent' => 'setIsSent',
            'sentAliasName' => 'setSentAliasName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  本节点id
    * parentId  父节点id
    * type  节点类型
    * name  节点名称
    * aliasName  节点别名
    * notices  提示信息，例如提示库下表过多
    * extendInfo  扩展信息，例如提示有无数据,结构是否在目标库中存在
    * isSupportExpand  是否支持展开查询
    * hasColumnInfo  是否有列信息
    * isPreset  是否预置
    * tokenCount  token个数
    * isSent  是否已经下发给node
    * sentAliasName  下发给node的别名
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'parentId' => 'getParentId',
            'type' => 'getType',
            'name' => 'getName',
            'aliasName' => 'getAliasName',
            'notices' => 'getNotices',
            'extendInfo' => 'getExtendInfo',
            'isSupportExpand' => 'getIsSupportExpand',
            'hasColumnInfo' => 'getHasColumnInfo',
            'isPreset' => 'getIsPreset',
            'tokenCount' => 'getTokenCount',
            'isSent' => 'getIsSent',
            'sentAliasName' => 'getSentAliasName'
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
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['aliasName'] = isset($data['aliasName']) ? $data['aliasName'] : null;
        $this->container['notices'] = isset($data['notices']) ? $data['notices'] : null;
        $this->container['extendInfo'] = isset($data['extendInfo']) ? $data['extendInfo'] : null;
        $this->container['isSupportExpand'] = isset($data['isSupportExpand']) ? $data['isSupportExpand'] : null;
        $this->container['hasColumnInfo'] = isset($data['hasColumnInfo']) ? $data['hasColumnInfo'] : null;
        $this->container['isPreset'] = isset($data['isPreset']) ? $data['isPreset'] : null;
        $this->container['tokenCount'] = isset($data['tokenCount']) ? $data['tokenCount'] : null;
        $this->container['isSent'] = isset($data['isSent']) ? $data['isSent'] : null;
        $this->container['sentAliasName'] = isset($data['sentAliasName']) ? $data['sentAliasName'] : null;
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
    *  本节点id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 本节点id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets parentId
    *  父节点id
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父节点id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets type
    *  节点类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 节点类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  节点名称
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
    * @param string|null $name 节点名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets aliasName
    *  节点别名
    *
    * @return string|null
    */
    public function getAliasName()
    {
        return $this->container['aliasName'];
    }

    /**
    * Sets aliasName
    *
    * @param string|null $aliasName 节点别名
    *
    * @return $this
    */
    public function setAliasName($aliasName)
    {
        $this->container['aliasName'] = $aliasName;
        return $this;
    }

    /**
    * Gets notices
    *  提示信息，例如提示库下表过多
    *
    * @return string[]|null
    */
    public function getNotices()
    {
        return $this->container['notices'];
    }

    /**
    * Sets notices
    *
    * @param string[]|null $notices 提示信息，例如提示库下表过多
    *
    * @return $this
    */
    public function setNotices($notices)
    {
        $this->container['notices'] = $notices;
        return $this;
    }

    /**
    * Gets extendInfo
    *  扩展信息，例如提示有无数据,结构是否在目标库中存在
    *
    * @return string|null
    */
    public function getExtendInfo()
    {
        return $this->container['extendInfo'];
    }

    /**
    * Sets extendInfo
    *
    * @param string|null $extendInfo 扩展信息，例如提示有无数据,结构是否在目标库中存在
    *
    * @return $this
    */
    public function setExtendInfo($extendInfo)
    {
        $this->container['extendInfo'] = $extendInfo;
        return $this;
    }

    /**
    * Gets isSupportExpand
    *  是否支持展开查询
    *
    * @return bool|null
    */
    public function getIsSupportExpand()
    {
        return $this->container['isSupportExpand'];
    }

    /**
    * Sets isSupportExpand
    *
    * @param bool|null $isSupportExpand 是否支持展开查询
    *
    * @return $this
    */
    public function setIsSupportExpand($isSupportExpand)
    {
        $this->container['isSupportExpand'] = $isSupportExpand;
        return $this;
    }

    /**
    * Gets hasColumnInfo
    *  是否有列信息
    *
    * @return bool|null
    */
    public function getHasColumnInfo()
    {
        return $this->container['hasColumnInfo'];
    }

    /**
    * Sets hasColumnInfo
    *
    * @param bool|null $hasColumnInfo 是否有列信息
    *
    * @return $this
    */
    public function setHasColumnInfo($hasColumnInfo)
    {
        $this->container['hasColumnInfo'] = $hasColumnInfo;
        return $this;
    }

    /**
    * Gets isPreset
    *  是否预置
    *
    * @return bool|null
    */
    public function getIsPreset()
    {
        return $this->container['isPreset'];
    }

    /**
    * Sets isPreset
    *
    * @param bool|null $isPreset 是否预置
    *
    * @return $this
    */
    public function setIsPreset($isPreset)
    {
        $this->container['isPreset'] = $isPreset;
        return $this;
    }

    /**
    * Gets tokenCount
    *  token个数
    *
    * @return string|null
    */
    public function getTokenCount()
    {
        return $this->container['tokenCount'];
    }

    /**
    * Sets tokenCount
    *
    * @param string|null $tokenCount token个数
    *
    * @return $this
    */
    public function setTokenCount($tokenCount)
    {
        $this->container['tokenCount'] = $tokenCount;
        return $this;
    }

    /**
    * Gets isSent
    *  是否已经下发给node
    *
    * @return bool|null
    */
    public function getIsSent()
    {
        return $this->container['isSent'];
    }

    /**
    * Sets isSent
    *
    * @param bool|null $isSent 是否已经下发给node
    *
    * @return $this
    */
    public function setIsSent($isSent)
    {
        $this->container['isSent'] = $isSent;
        return $this;
    }

    /**
    * Gets sentAliasName
    *  下发给node的别名
    *
    * @return string|null
    */
    public function getSentAliasName()
    {
        return $this->container['sentAliasName'];
    }

    /**
    * Sets sentAliasName
    *
    * @param string|null $sentAliasName 下发给node的别名
    *
    * @return $this
    */
    public function setSentAliasName($sentAliasName)
    {
        $this->container['sentAliasName'] = $sentAliasName;
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

