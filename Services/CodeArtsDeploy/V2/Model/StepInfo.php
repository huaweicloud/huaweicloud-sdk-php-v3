<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StepInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StepInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  请求的region
    * id  应用id
    * offset  偏移量
    * enable  是否启用
    * name  步骤名称
    * currentOffset  当前偏移量
    * elapsedTime  任务执行时长
    * faqUrl  常见问题
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'id' => 'int',
            'offset' => 'int',
            'enable' => 'bool',
            'name' => 'string',
            'currentOffset' => 'int',
            'elapsedTime' => 'int',
            'faqUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  请求的region
    * id  应用id
    * offset  偏移量
    * enable  是否启用
    * name  步骤名称
    * currentOffset  当前偏移量
    * elapsedTime  任务执行时长
    * faqUrl  常见问题
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'id' => 'int64',
        'offset' => null,
        'enable' => null,
        'name' => null,
        'currentOffset' => null,
        'elapsedTime' => 'int64',
        'faqUrl' => null
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
    * region  请求的region
    * id  应用id
    * offset  偏移量
    * enable  是否启用
    * name  步骤名称
    * currentOffset  当前偏移量
    * elapsedTime  任务执行时长
    * faqUrl  常见问题
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'id' => 'id',
            'offset' => 'offset',
            'enable' => 'enable',
            'name' => 'name',
            'currentOffset' => 'current_offset',
            'elapsedTime' => 'elapsed_time',
            'faqUrl' => 'faq_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  请求的region
    * id  应用id
    * offset  偏移量
    * enable  是否启用
    * name  步骤名称
    * currentOffset  当前偏移量
    * elapsedTime  任务执行时长
    * faqUrl  常见问题
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'id' => 'setId',
            'offset' => 'setOffset',
            'enable' => 'setEnable',
            'name' => 'setName',
            'currentOffset' => 'setCurrentOffset',
            'elapsedTime' => 'setElapsedTime',
            'faqUrl' => 'setFaqUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  请求的region
    * id  应用id
    * offset  偏移量
    * enable  是否启用
    * name  步骤名称
    * currentOffset  当前偏移量
    * elapsedTime  任务执行时长
    * faqUrl  常见问题
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'id' => 'getId',
            'offset' => 'getOffset',
            'enable' => 'getEnable',
            'name' => 'getName',
            'currentOffset' => 'getCurrentOffset',
            'elapsedTime' => 'getElapsedTime',
            'faqUrl' => 'getFaqUrl'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['currentOffset'] = isset($data['currentOffset']) ? $data['currentOffset'] : null;
        $this->container['elapsedTime'] = isset($data['elapsedTime']) ? $data['elapsedTime'] : null;
        $this->container['faqUrl'] = isset($data['faqUrl']) ? $data['faqUrl'] : null;
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
    * Gets region
    *  请求的region
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 请求的region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets id
    *  应用id
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
    * @param int|null $id 应用id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets enable
    *  是否启用
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 是否启用
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets name
    *  步骤名称
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
    * @param string|null $name 步骤名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets currentOffset
    *  当前偏移量
    *
    * @return int|null
    */
    public function getCurrentOffset()
    {
        return $this->container['currentOffset'];
    }

    /**
    * Sets currentOffset
    *
    * @param int|null $currentOffset 当前偏移量
    *
    * @return $this
    */
    public function setCurrentOffset($currentOffset)
    {
        $this->container['currentOffset'] = $currentOffset;
        return $this;
    }

    /**
    * Gets elapsedTime
    *  任务执行时长
    *
    * @return int|null
    */
    public function getElapsedTime()
    {
        return $this->container['elapsedTime'];
    }

    /**
    * Sets elapsedTime
    *
    * @param int|null $elapsedTime 任务执行时长
    *
    * @return $this
    */
    public function setElapsedTime($elapsedTime)
    {
        $this->container['elapsedTime'] = $elapsedTime;
        return $this;
    }

    /**
    * Gets faqUrl
    *  常见问题
    *
    * @return string|null
    */
    public function getFaqUrl()
    {
        return $this->container['faqUrl'];
    }

    /**
    * Sets faqUrl
    *
    * @param string|null $faqUrl 常见问题
    *
    * @return $this
    */
    public function setFaqUrl($faqUrl)
    {
        $this->container['faqUrl'] = $faqUrl;
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

