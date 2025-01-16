<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPrrTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPrrTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  PRR模板id
    * name  模板名称
    * applicationType  应用分类
    * description  模板描述
    * creator  创建人id
    * creatorName  创建人名称
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    * isRelatedReview  是否已关联检查项
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'applicationType' => 'string',
            'description' => 'string',
            'creator' => 'string',
            'creatorName' => 'string',
            'createTime' => 'int',
            'lastUpdateTime' => 'int',
            'isRelatedReview' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  PRR模板id
    * name  模板名称
    * applicationType  应用分类
    * description  模板描述
    * creator  创建人id
    * creatorName  创建人名称
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    * isRelatedReview  是否已关联检查项
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'applicationType' => null,
        'description' => null,
        'creator' => null,
        'creatorName' => null,
        'createTime' => 'int64',
        'lastUpdateTime' => 'int64',
        'isRelatedReview' => null
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
    * id  PRR模板id
    * name  模板名称
    * applicationType  应用分类
    * description  模板描述
    * creator  创建人id
    * creatorName  创建人名称
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    * isRelatedReview  是否已关联检查项
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'applicationType' => 'application_type',
            'description' => 'description',
            'creator' => 'creator',
            'creatorName' => 'creator_name',
            'createTime' => 'create_time',
            'lastUpdateTime' => 'last_update_time',
            'isRelatedReview' => 'is_related_review'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  PRR模板id
    * name  模板名称
    * applicationType  应用分类
    * description  模板描述
    * creator  创建人id
    * creatorName  创建人名称
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    * isRelatedReview  是否已关联检查项
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'applicationType' => 'setApplicationType',
            'description' => 'setDescription',
            'creator' => 'setCreator',
            'creatorName' => 'setCreatorName',
            'createTime' => 'setCreateTime',
            'lastUpdateTime' => 'setLastUpdateTime',
            'isRelatedReview' => 'setIsRelatedReview'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  PRR模板id
    * name  模板名称
    * applicationType  应用分类
    * description  模板描述
    * creator  创建人id
    * creatorName  创建人名称
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    * isRelatedReview  是否已关联检查项
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'applicationType' => 'getApplicationType',
            'description' => 'getDescription',
            'creator' => 'getCreator',
            'creatorName' => 'getCreatorName',
            'createTime' => 'getCreateTime',
            'lastUpdateTime' => 'getLastUpdateTime',
            'isRelatedReview' => 'getIsRelatedReview'
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
        $this->container['applicationType'] = isset($data['applicationType']) ? $data['applicationType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['isRelatedReview'] = isset($data['isRelatedReview']) ? $data['isRelatedReview'] : null;
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
    *  PRR模板id
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
    * @param string|null $id PRR模板id
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
    * Gets applicationType
    *  应用分类
    *
    * @return string|null
    */
    public function getApplicationType()
    {
        return $this->container['applicationType'];
    }

    /**
    * Sets applicationType
    *
    * @param string|null $applicationType 应用分类
    *
    * @return $this
    */
    public function setApplicationType($applicationType)
    {
        $this->container['applicationType'] = $applicationType;
        return $this;
    }

    /**
    * Gets description
    *  模板描述
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
    * @param string|null $description 模板描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets creator
    *  创建人id
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
    * @param string|null $creator 创建人id
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人名称
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
    * @param string|null $creatorName 创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最后更新时间
    *
    * @return int|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param int|null $lastUpdateTime 最后更新时间
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets isRelatedReview
    *  是否已关联检查项
    *
    * @return bool|null
    */
    public function getIsRelatedReview()
    {
        return $this->container['isRelatedReview'];
    }

    /**
    * Sets isRelatedReview
    *
    * @param bool|null $isRelatedReview 是否已关联检查项
    *
    * @return $this
    */
    public function setIsRelatedReview($isRelatedReview)
    {
        $this->container['isRelatedReview'] = $isRelatedReview;
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

