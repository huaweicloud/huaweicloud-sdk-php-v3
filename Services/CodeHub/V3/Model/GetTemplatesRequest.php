<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetTemplatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetTemplatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * platform  模板平台类型
    * language  语言类型
    * pipeline  是否支持流水线
    * entertype  模板分类
    * search  模板名称
    * dateorder  模板日期排序
    * usedtimeorder  模板引用次数排序
    * type  模板公开类型
    * region  大区名称
    * pageNo  分页页数
    * pageSize  每页数据数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'platform' => 'string',
            'language' => 'string',
            'pipeline' => 'string',
            'entertype' => 'string',
            'search' => 'string',
            'dateorder' => 'string',
            'usedtimeorder' => 'string',
            'type' => 'string',
            'region' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * platform  模板平台类型
    * language  语言类型
    * pipeline  是否支持流水线
    * entertype  模板分类
    * search  模板名称
    * dateorder  模板日期排序
    * usedtimeorder  模板引用次数排序
    * type  模板公开类型
    * region  大区名称
    * pageNo  分页页数
    * pageSize  每页数据数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'platform' => null,
        'language' => null,
        'pipeline' => null,
        'entertype' => null,
        'search' => null,
        'dateorder' => null,
        'usedtimeorder' => null,
        'type' => null,
        'region' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32'
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
    * platform  模板平台类型
    * language  语言类型
    * pipeline  是否支持流水线
    * entertype  模板分类
    * search  模板名称
    * dateorder  模板日期排序
    * usedtimeorder  模板引用次数排序
    * type  模板公开类型
    * region  大区名称
    * pageNo  分页页数
    * pageSize  每页数据数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'platform' => 'platform',
            'language' => 'language',
            'pipeline' => 'pipeline',
            'entertype' => 'entertype',
            'search' => 'search',
            'dateorder' => 'dateorder',
            'usedtimeorder' => 'usedtimeorder',
            'type' => 'type',
            'region' => 'region',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * platform  模板平台类型
    * language  语言类型
    * pipeline  是否支持流水线
    * entertype  模板分类
    * search  模板名称
    * dateorder  模板日期排序
    * usedtimeorder  模板引用次数排序
    * type  模板公开类型
    * region  大区名称
    * pageNo  分页页数
    * pageSize  每页数据数
    *
    * @var string[]
    */
    protected static $setters = [
            'platform' => 'setPlatform',
            'language' => 'setLanguage',
            'pipeline' => 'setPipeline',
            'entertype' => 'setEntertype',
            'search' => 'setSearch',
            'dateorder' => 'setDateorder',
            'usedtimeorder' => 'setUsedtimeorder',
            'type' => 'setType',
            'region' => 'setRegion',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * platform  模板平台类型
    * language  语言类型
    * pipeline  是否支持流水线
    * entertype  模板分类
    * search  模板名称
    * dateorder  模板日期排序
    * usedtimeorder  模板引用次数排序
    * type  模板公开类型
    * region  大区名称
    * pageNo  分页页数
    * pageSize  每页数据数
    *
    * @var string[]
    */
    protected static $getters = [
            'platform' => 'getPlatform',
            'language' => 'getLanguage',
            'pipeline' => 'getPipeline',
            'entertype' => 'getEntertype',
            'search' => 'getSearch',
            'dateorder' => 'getDateorder',
            'usedtimeorder' => 'getUsedtimeorder',
            'type' => 'getType',
            'region' => 'getRegion',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize'
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
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['pipeline'] = isset($data['pipeline']) ? $data['pipeline'] : null;
        $this->container['entertype'] = isset($data['entertype']) ? $data['entertype'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['dateorder'] = isset($data['dateorder']) ? $data['dateorder'] : null;
        $this->container['usedtimeorder'] = isset($data['usedtimeorder']) ? $data['usedtimeorder'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pageNo'] === null) {
            $invalidProperties[] = "'pageNo' can't be null";
        }
        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
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
    * Gets platform
    *  模板平台类型
    *
    * @return string|null
    */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
    * Sets platform
    *
    * @param string|null $platform 模板平台类型
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
        return $this;
    }

    /**
    * Gets language
    *  语言类型
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 语言类型
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets pipeline
    *  是否支持流水线
    *
    * @return string|null
    */
    public function getPipeline()
    {
        return $this->container['pipeline'];
    }

    /**
    * Sets pipeline
    *
    * @param string|null $pipeline 是否支持流水线
    *
    * @return $this
    */
    public function setPipeline($pipeline)
    {
        $this->container['pipeline'] = $pipeline;
        return $this;
    }

    /**
    * Gets entertype
    *  模板分类
    *
    * @return string|null
    */
    public function getEntertype()
    {
        return $this->container['entertype'];
    }

    /**
    * Sets entertype
    *
    * @param string|null $entertype 模板分类
    *
    * @return $this
    */
    public function setEntertype($entertype)
    {
        $this->container['entertype'] = $entertype;
        return $this;
    }

    /**
    * Gets search
    *  模板名称
    *
    * @return string|null
    */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
    * Sets search
    *
    * @param string|null $search 模板名称
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets dateorder
    *  模板日期排序
    *
    * @return string|null
    */
    public function getDateorder()
    {
        return $this->container['dateorder'];
    }

    /**
    * Sets dateorder
    *
    * @param string|null $dateorder 模板日期排序
    *
    * @return $this
    */
    public function setDateorder($dateorder)
    {
        $this->container['dateorder'] = $dateorder;
        return $this;
    }

    /**
    * Gets usedtimeorder
    *  模板引用次数排序
    *
    * @return string|null
    */
    public function getUsedtimeorder()
    {
        return $this->container['usedtimeorder'];
    }

    /**
    * Sets usedtimeorder
    *
    * @param string|null $usedtimeorder 模板引用次数排序
    *
    * @return $this
    */
    public function setUsedtimeorder($usedtimeorder)
    {
        $this->container['usedtimeorder'] = $usedtimeorder;
        return $this;
    }

    /**
    * Gets type
    *  模板公开类型
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
    * @param string|null $type 模板公开类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets region
    *  大区名称
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
    * @param string|null $region 大区名称
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets pageNo
    *  分页页数
    *
    * @return int
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int $pageNo 分页页数
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页数据数
    *
    * @return int
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int $pageSize 每页数据数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
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

