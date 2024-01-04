<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTopicsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTopicsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
    * limit  查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
    * enterpriseProjectId  企业项目id，默认企业项目id为0。
    * name  检索的主题名称，完全匹配。
    * fuzzyName  检索的主题名称，模糊匹配。
    * topicId  检索的主题ID，完全匹配。
    * fuzzyDisplayName  检索的主题显示名。模糊匹配。参数字节长度不能大于192字节。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'enterpriseProjectId' => 'string',
            'name' => 'string',
            'fuzzyName' => 'string',
            'topicId' => 'string',
            'fuzzyDisplayName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
    * limit  查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
    * enterpriseProjectId  企业项目id，默认企业项目id为0。
    * name  检索的主题名称，完全匹配。
    * fuzzyName  检索的主题名称，模糊匹配。
    * topicId  检索的主题ID，完全匹配。
    * fuzzyDisplayName  检索的主题显示名。模糊匹配。参数字节长度不能大于192字节。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => null,
        'limit' => null,
        'enterpriseProjectId' => null,
        'name' => null,
        'fuzzyName' => null,
        'topicId' => null,
        'fuzzyDisplayName' => null
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
    * offset  偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
    * limit  查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
    * enterpriseProjectId  企业项目id，默认企业项目id为0。
    * name  检索的主题名称，完全匹配。
    * fuzzyName  检索的主题名称，模糊匹配。
    * topicId  检索的主题ID，完全匹配。
    * fuzzyDisplayName  检索的主题显示名。模糊匹配。参数字节长度不能大于192字节。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'enterpriseProjectId' => 'enterprise_project_id',
            'name' => 'name',
            'fuzzyName' => 'fuzzy_name',
            'topicId' => 'topic_id',
            'fuzzyDisplayName' => 'fuzzy_display_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
    * limit  查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
    * enterpriseProjectId  企业项目id，默认企业项目id为0。
    * name  检索的主题名称，完全匹配。
    * fuzzyName  检索的主题名称，模糊匹配。
    * topicId  检索的主题ID，完全匹配。
    * fuzzyDisplayName  检索的主题显示名。模糊匹配。参数字节长度不能大于192字节。
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'name' => 'setName',
            'fuzzyName' => 'setFuzzyName',
            'topicId' => 'setTopicId',
            'fuzzyDisplayName' => 'setFuzzyDisplayName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
    * limit  查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
    * enterpriseProjectId  企业项目id，默认企业项目id为0。
    * name  检索的主题名称，完全匹配。
    * fuzzyName  检索的主题名称，模糊匹配。
    * topicId  检索的主题ID，完全匹配。
    * fuzzyDisplayName  检索的主题显示名。模糊匹配。参数字节长度不能大于192字节。
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'name' => 'getName',
            'fuzzyName' => 'getFuzzyName',
            'topicId' => 'getTopicId',
            'fuzzyDisplayName' => 'getFuzzyDisplayName'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fuzzyName'] = isset($data['fuzzyName']) ? $data['fuzzyName'] : null;
        $this->container['topicId'] = isset($data['topicId']) ? $data['topicId'] : null;
        $this->container['fuzzyDisplayName'] = isset($data['fuzzyDisplayName']) ? $data['fuzzyDisplayName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fuzzyName']) && !preg_match("/^[-_a-zA-Z0-9]{0,255}$/", $this->container['fuzzyName'])) {
                $invalidProperties[] = "invalid value for 'fuzzyName', must be conform to the pattern /^[-_a-zA-Z0-9]{0,255}$/.";
            }
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
    * Gets offset
    *  偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
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
    * @param int|null $offset 偏移量。  偏移量为一个大于0小于资源总个数的整数，表示查询该偏移量后面的所有的资源，默认值为0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询的数量限制。  取值范围：1~100，取值一般为10，20，50。功能说明：每页返回的资源个数。默认值为100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id，默认企业项目id为0。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id，默认企业项目id为0。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets name
    *  检索的主题名称，完全匹配。
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
    * @param string|null $name 检索的主题名称，完全匹配。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets fuzzyName
    *  检索的主题名称，模糊匹配。
    *
    * @return string|null
    */
    public function getFuzzyName()
    {
        return $this->container['fuzzyName'];
    }

    /**
    * Sets fuzzyName
    *
    * @param string|null $fuzzyName 检索的主题名称，模糊匹配。
    *
    * @return $this
    */
    public function setFuzzyName($fuzzyName)
    {
        $this->container['fuzzyName'] = $fuzzyName;
        return $this;
    }

    /**
    * Gets topicId
    *  检索的主题ID，完全匹配。
    *
    * @return string|null
    */
    public function getTopicId()
    {
        return $this->container['topicId'];
    }

    /**
    * Sets topicId
    *
    * @param string|null $topicId 检索的主题ID，完全匹配。
    *
    * @return $this
    */
    public function setTopicId($topicId)
    {
        $this->container['topicId'] = $topicId;
        return $this;
    }

    /**
    * Gets fuzzyDisplayName
    *  检索的主题显示名。模糊匹配。参数字节长度不能大于192字节。
    *
    * @return string|null
    */
    public function getFuzzyDisplayName()
    {
        return $this->container['fuzzyDisplayName'];
    }

    /**
    * Sets fuzzyDisplayName
    *
    * @param string|null $fuzzyDisplayName 检索的主题显示名。模糊匹配。参数字节长度不能大于192字节。
    *
    * @return $this
    */
    public function setFuzzyDisplayName($fuzzyDisplayName)
    {
        $this->container['fuzzyDisplayName'] = $fuzzyDisplayName;
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

