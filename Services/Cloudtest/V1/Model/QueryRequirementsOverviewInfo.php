<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryRequirementsOverviewInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryRequirementsOverviewInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fixedVersionId  筛选迭代ID
    * moduleId  模块ID
    * keyWord  关键字
    * pageSize  每页数量
    * pageNo  页码
    * piFilter  piFilter
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fixedVersionId' => 'string',
            'moduleId' => 'string',
            'keyWord' => 'string',
            'pageSize' => 'int',
            'pageNo' => 'int',
            'piFilter' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\PiFilterInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fixedVersionId  筛选迭代ID
    * moduleId  模块ID
    * keyWord  关键字
    * pageSize  每页数量
    * pageNo  页码
    * piFilter  piFilter
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fixedVersionId' => null,
        'moduleId' => null,
        'keyWord' => null,
        'pageSize' => 'int32',
        'pageNo' => 'int32',
        'piFilter' => null
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
    * fixedVersionId  筛选迭代ID
    * moduleId  模块ID
    * keyWord  关键字
    * pageSize  每页数量
    * pageNo  页码
    * piFilter  piFilter
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fixedVersionId' => 'fixed_version_id',
            'moduleId' => 'module_id',
            'keyWord' => 'key_word',
            'pageSize' => 'page_size',
            'pageNo' => 'page_no',
            'piFilter' => 'pi_filter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fixedVersionId  筛选迭代ID
    * moduleId  模块ID
    * keyWord  关键字
    * pageSize  每页数量
    * pageNo  页码
    * piFilter  piFilter
    *
    * @var string[]
    */
    protected static $setters = [
            'fixedVersionId' => 'setFixedVersionId',
            'moduleId' => 'setModuleId',
            'keyWord' => 'setKeyWord',
            'pageSize' => 'setPageSize',
            'pageNo' => 'setPageNo',
            'piFilter' => 'setPiFilter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fixedVersionId  筛选迭代ID
    * moduleId  模块ID
    * keyWord  关键字
    * pageSize  每页数量
    * pageNo  页码
    * piFilter  piFilter
    *
    * @var string[]
    */
    protected static $getters = [
            'fixedVersionId' => 'getFixedVersionId',
            'moduleId' => 'getModuleId',
            'keyWord' => 'getKeyWord',
            'pageSize' => 'getPageSize',
            'pageNo' => 'getPageNo',
            'piFilter' => 'getPiFilter'
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
        $this->container['fixedVersionId'] = isset($data['fixedVersionId']) ? $data['fixedVersionId'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['keyWord'] = isset($data['keyWord']) ? $data['keyWord'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['piFilter'] = isset($data['piFilter']) ? $data['piFilter'] : null;
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
    * Gets fixedVersionId
    *  筛选迭代ID
    *
    * @return string|null
    */
    public function getFixedVersionId()
    {
        return $this->container['fixedVersionId'];
    }

    /**
    * Sets fixedVersionId
    *
    * @param string|null $fixedVersionId 筛选迭代ID
    *
    * @return $this
    */
    public function setFixedVersionId($fixedVersionId)
    {
        $this->container['fixedVersionId'] = $fixedVersionId;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块ID
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 模块ID
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets keyWord
    *  关键字
    *
    * @return string|null
    */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
    * Sets keyWord
    *
    * @param string|null $keyWord 关键字
    *
    * @return $this
    */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页数量
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页数量
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets pageNo
    *  页码
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo 页码
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets piFilter
    *  piFilter
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\PiFilterInfo|null
    */
    public function getPiFilter()
    {
        return $this->container['piFilter'];
    }

    /**
    * Sets piFilter
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\PiFilterInfo|null $piFilter piFilter
    *
    * @return $this
    */
    public function setPiFilter($piFilter)
    {
        $this->container['piFilter'] = $piFilter;
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

