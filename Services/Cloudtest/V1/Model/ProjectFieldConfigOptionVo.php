<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectFieldConfigOptionVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectFieldConfigOptionVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  字段选项URI标识.新增不传，修改、删除使用必传
    * name  可选项名称
    * code  可选项code值
    * updator  updator
    * description  描述
    * flag  修改标识，0：不可修改 1：可修改，用于结果和状态的选项值
    * sortNumb  顺序数值
    * creator  creator
    * createTimeStamp  创建时间时间戳
    * updateTimeStamp  更新时间时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'name' => 'string',
            'code' => 'string',
            'updator' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'description' => 'string',
            'flag' => 'int',
            'sortNumb' => 'int',
            'creator' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'createTimeStamp' => 'int',
            'updateTimeStamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  字段选项URI标识.新增不传，修改、删除使用必传
    * name  可选项名称
    * code  可选项code值
    * updator  updator
    * description  描述
    * flag  修改标识，0：不可修改 1：可修改，用于结果和状态的选项值
    * sortNumb  顺序数值
    * creator  creator
    * createTimeStamp  创建时间时间戳
    * updateTimeStamp  更新时间时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'name' => null,
        'code' => null,
        'updator' => null,
        'description' => null,
        'flag' => 'int32',
        'sortNumb' => 'int32',
        'creator' => null,
        'createTimeStamp' => 'int64',
        'updateTimeStamp' => 'int64'
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
    * uri  字段选项URI标识.新增不传，修改、删除使用必传
    * name  可选项名称
    * code  可选项code值
    * updator  updator
    * description  描述
    * flag  修改标识，0：不可修改 1：可修改，用于结果和状态的选项值
    * sortNumb  顺序数值
    * creator  creator
    * createTimeStamp  创建时间时间戳
    * updateTimeStamp  更新时间时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'name' => 'name',
            'code' => 'code',
            'updator' => 'updator',
            'description' => 'description',
            'flag' => 'flag',
            'sortNumb' => 'sort_numb',
            'creator' => 'creator',
            'createTimeStamp' => 'create_time_stamp',
            'updateTimeStamp' => 'update_time_stamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  字段选项URI标识.新增不传，修改、删除使用必传
    * name  可选项名称
    * code  可选项code值
    * updator  updator
    * description  描述
    * flag  修改标识，0：不可修改 1：可修改，用于结果和状态的选项值
    * sortNumb  顺序数值
    * creator  creator
    * createTimeStamp  创建时间时间戳
    * updateTimeStamp  更新时间时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'name' => 'setName',
            'code' => 'setCode',
            'updator' => 'setUpdator',
            'description' => 'setDescription',
            'flag' => 'setFlag',
            'sortNumb' => 'setSortNumb',
            'creator' => 'setCreator',
            'createTimeStamp' => 'setCreateTimeStamp',
            'updateTimeStamp' => 'setUpdateTimeStamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  字段选项URI标识.新增不传，修改、删除使用必传
    * name  可选项名称
    * code  可选项code值
    * updator  updator
    * description  描述
    * flag  修改标识，0：不可修改 1：可修改，用于结果和状态的选项值
    * sortNumb  顺序数值
    * creator  creator
    * createTimeStamp  创建时间时间戳
    * updateTimeStamp  更新时间时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'name' => 'getName',
            'code' => 'getCode',
            'updator' => 'getUpdator',
            'description' => 'getDescription',
            'flag' => 'getFlag',
            'sortNumb' => 'getSortNumb',
            'creator' => 'getCreator',
            'createTimeStamp' => 'getCreateTimeStamp',
            'updateTimeStamp' => 'getUpdateTimeStamp'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['updator'] = isset($data['updator']) ? $data['updator'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['sortNumb'] = isset($data['sortNumb']) ? $data['sortNumb'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createTimeStamp'] = isset($data['createTimeStamp']) ? $data['createTimeStamp'] : null;
        $this->container['updateTimeStamp'] = isset($data['updateTimeStamp']) ? $data['updateTimeStamp'] : null;
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
    * Gets uri
    *  字段选项URI标识.新增不传，修改、删除使用必传
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri 字段选项URI标识.新增不传，修改、删除使用必传
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets name
    *  可选项名称
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
    * @param string|null $name 可选项名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets code
    *  可选项code值
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 可选项code值
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets updator
    *  updator
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getUpdator()
    {
        return $this->container['updator'];
    }

    /**
    * Sets updator
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $updator updator
    *
    * @return $this
    */
    public function setUpdator($updator)
    {
        $this->container['updator'] = $updator;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets flag
    *  修改标识，0：不可修改 1：可修改，用于结果和状态的选项值
    *
    * @return int|null
    */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
    * Sets flag
    *
    * @param int|null $flag 修改标识，0：不可修改 1：可修改，用于结果和状态的选项值
    *
    * @return $this
    */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;
        return $this;
    }

    /**
    * Gets sortNumb
    *  顺序数值
    *
    * @return int|null
    */
    public function getSortNumb()
    {
        return $this->container['sortNumb'];
    }

    /**
    * Sets sortNumb
    *
    * @param int|null $sortNumb 顺序数值
    *
    * @return $this
    */
    public function setSortNumb($sortNumb)
    {
        $this->container['sortNumb'] = $sortNumb;
        return $this;
    }

    /**
    * Gets creator
    *  creator
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $creator creator
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets createTimeStamp
    *  创建时间时间戳
    *
    * @return int|null
    */
    public function getCreateTimeStamp()
    {
        return $this->container['createTimeStamp'];
    }

    /**
    * Sets createTimeStamp
    *
    * @param int|null $createTimeStamp 创建时间时间戳
    *
    * @return $this
    */
    public function setCreateTimeStamp($createTimeStamp)
    {
        $this->container['createTimeStamp'] = $createTimeStamp;
        return $this;
    }

    /**
    * Gets updateTimeStamp
    *  更新时间时间戳
    *
    * @return int|null
    */
    public function getUpdateTimeStamp()
    {
        return $this->container['updateTimeStamp'];
    }

    /**
    * Sets updateTimeStamp
    *
    * @param int|null $updateTimeStamp 更新时间时间戳
    *
    * @return $this
    */
    public function setUpdateTimeStamp($updateTimeStamp)
    {
        $this->container['updateTimeStamp'] = $updateTimeStamp;
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

