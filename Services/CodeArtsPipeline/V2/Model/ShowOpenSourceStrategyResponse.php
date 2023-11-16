<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOpenSourceStrategyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOpenSourceStrategyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  策略ID
    * name  策略名称
    * level  策略级别
    * parentId  父策略ID
    * version  策略版本
    * isValid  是否启用
    * isPublic  是否系统级策略
    * creator  创建人
    * createTime  创建时间
    * updater  更新人
    * updateTime  更新时间
    * content  content
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'level' => 'string',
            'parentId' => 'string',
            'version' => 'string',
            'isValid' => 'bool',
            'isPublic' => 'bool',
            'creator' => 'string',
            'createTime' => 'string',
            'updater' => 'string',
            'updateTime' => 'string',
            'content' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\OpenSourceRuleContent'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  策略ID
    * name  策略名称
    * level  策略级别
    * parentId  父策略ID
    * version  策略版本
    * isValid  是否启用
    * isPublic  是否系统级策略
    * creator  创建人
    * createTime  创建时间
    * updater  更新人
    * updateTime  更新时间
    * content  content
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'level' => null,
        'parentId' => null,
        'version' => null,
        'isValid' => null,
        'isPublic' => null,
        'creator' => null,
        'createTime' => null,
        'updater' => null,
        'updateTime' => null,
        'content' => null
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
    * id  策略ID
    * name  策略名称
    * level  策略级别
    * parentId  父策略ID
    * version  策略版本
    * isValid  是否启用
    * isPublic  是否系统级策略
    * creator  创建人
    * createTime  创建时间
    * updater  更新人
    * updateTime  更新时间
    * content  content
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'level' => 'level',
            'parentId' => 'parent_id',
            'version' => 'version',
            'isValid' => 'is_valid',
            'isPublic' => 'is_public',
            'creator' => 'creator',
            'createTime' => 'create_time',
            'updater' => 'updater',
            'updateTime' => 'update_time',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  策略ID
    * name  策略名称
    * level  策略级别
    * parentId  父策略ID
    * version  策略版本
    * isValid  是否启用
    * isPublic  是否系统级策略
    * creator  创建人
    * createTime  创建时间
    * updater  更新人
    * updateTime  更新时间
    * content  content
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'level' => 'setLevel',
            'parentId' => 'setParentId',
            'version' => 'setVersion',
            'isValid' => 'setIsValid',
            'isPublic' => 'setIsPublic',
            'creator' => 'setCreator',
            'createTime' => 'setCreateTime',
            'updater' => 'setUpdater',
            'updateTime' => 'setUpdateTime',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  策略ID
    * name  策略名称
    * level  策略级别
    * parentId  父策略ID
    * version  策略版本
    * isValid  是否启用
    * isPublic  是否系统级策略
    * creator  创建人
    * createTime  创建时间
    * updater  更新人
    * updateTime  更新时间
    * content  content
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'level' => 'getLevel',
            'parentId' => 'getParentId',
            'version' => 'getVersion',
            'isValid' => 'getIsValid',
            'isPublic' => 'getIsPublic',
            'creator' => 'getCreator',
            'createTime' => 'getCreateTime',
            'updater' => 'getUpdater',
            'updateTime' => 'getUpdateTime',
            'content' => 'getContent'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updater'] = isset($data['updater']) ? $data['updater'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
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
    *  策略ID
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
    * @param string|null $id 策略ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  策略名称
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
    * @param string|null $name 策略名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets level
    *  策略级别
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 策略级别
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets parentId
    *  父策略ID
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
    * @param string|null $parentId 父策略ID
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets version
    *  策略版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 策略版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets isValid
    *  是否启用
    *
    * @return bool|null
    */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /**
    * Sets isValid
    *
    * @param bool|null $isValid 是否启用
    *
    * @return $this
    */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;
        return $this;
    }

    /**
    * Gets isPublic
    *  是否系统级策略
    *
    * @return bool|null
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool|null $isPublic 是否系统级策略
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
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
    * Gets updater
    *  更新人
    *
    * @return string|null
    */
    public function getUpdater()
    {
        return $this->container['updater'];
    }

    /**
    * Sets updater
    *
    * @param string|null $updater 更新人
    *
    * @return $this
    */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
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
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets content
    *  content
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\OpenSourceRuleContent|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\OpenSourceRuleContent|null $content content
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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

