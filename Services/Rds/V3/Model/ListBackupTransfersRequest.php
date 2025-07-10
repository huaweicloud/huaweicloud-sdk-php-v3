<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBackupTransfersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBackupTransfersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  查询记录数
    * orderField  排序字段
    * orderRule  排序规则
    * filterField  筛选字段
    * filterContent  筛选关键字
    * beginTime  开始时间戳
    * endTime  结束时间戳
    * xLanguage  语言
    * transferType  转储任务类型，默认为manual manual:手动转储任务 auto:自动转储任务
    * offset  分页页码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'orderField' => 'string',
            'orderRule' => 'string',
            'filterField' => 'string',
            'filterContent' => 'string',
            'beginTime' => 'int',
            'endTime' => 'int',
            'xLanguage' => 'string',
            'transferType' => 'string',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  查询记录数
    * orderField  排序字段
    * orderRule  排序规则
    * filterField  筛选字段
    * filterContent  筛选关键字
    * beginTime  开始时间戳
    * endTime  结束时间戳
    * xLanguage  语言
    * transferType  转储任务类型，默认为manual manual:手动转储任务 auto:自动转储任务
    * offset  分页页码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'orderField' => null,
        'orderRule' => null,
        'filterField' => null,
        'filterContent' => null,
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'xLanguage' => null,
        'transferType' => null,
        'offset' => 'int32'
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
    * limit  查询记录数
    * orderField  排序字段
    * orderRule  排序规则
    * filterField  筛选字段
    * filterContent  筛选关键字
    * beginTime  开始时间戳
    * endTime  结束时间戳
    * xLanguage  语言
    * transferType  转储任务类型，默认为manual manual:手动转储任务 auto:自动转储任务
    * offset  分页页码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'orderField' => 'order_field',
            'orderRule' => 'order_rule',
            'filterField' => 'filter_field',
            'filterContent' => 'filter_content',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'xLanguage' => 'X-Language',
            'transferType' => 'transfer_type',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  查询记录数
    * orderField  排序字段
    * orderRule  排序规则
    * filterField  筛选字段
    * filterContent  筛选关键字
    * beginTime  开始时间戳
    * endTime  结束时间戳
    * xLanguage  语言
    * transferType  转储任务类型，默认为manual manual:手动转储任务 auto:自动转储任务
    * offset  分页页码
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'orderField' => 'setOrderField',
            'orderRule' => 'setOrderRule',
            'filterField' => 'setFilterField',
            'filterContent' => 'setFilterContent',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'xLanguage' => 'setXLanguage',
            'transferType' => 'setTransferType',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  查询记录数
    * orderField  排序字段
    * orderRule  排序规则
    * filterField  筛选字段
    * filterContent  筛选关键字
    * beginTime  开始时间戳
    * endTime  结束时间戳
    * xLanguage  语言
    * transferType  转储任务类型，默认为manual manual:手动转储任务 auto:自动转储任务
    * offset  分页页码
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'orderField' => 'getOrderField',
            'orderRule' => 'getOrderRule',
            'filterField' => 'getFilterField',
            'filterContent' => 'getFilterContent',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'xLanguage' => 'getXLanguage',
            'transferType' => 'getTransferType',
            'offset' => 'getOffset'
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
    const TRANSFER_TYPE_MANUAL = 'manual';
    const TRANSFER_TYPE_AUTO = 'auto';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTransferTypeAllowableValues()
    {
        return [
            self::TRANSFER_TYPE_MANUAL,
            self::TRANSFER_TYPE_AUTO,
        ];
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['orderField'] = isset($data['orderField']) ? $data['orderField'] : null;
        $this->container['orderRule'] = isset($data['orderRule']) ? $data['orderRule'] : null;
        $this->container['filterField'] = isset($data['filterField']) ? $data['filterField'] : null;
        $this->container['filterContent'] = isset($data['filterContent']) ? $data['filterContent'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['transferType'] = isset($data['transferType']) ? $data['transferType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] <= 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than 0.";
            }
            $allowedValues = $this->getTransferTypeAllowableValues();
                if (!is_null($this->container['transferType']) && !in_array($this->container['transferType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'transferType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['offset']) && ($this->container['offset'] < 1)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 1.";
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
    * Gets limit
    *  查询记录数
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
    * @param int|null $limit 查询记录数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets orderField
    *  排序字段
    *
    * @return string|null
    */
    public function getOrderField()
    {
        return $this->container['orderField'];
    }

    /**
    * Sets orderField
    *
    * @param string|null $orderField 排序字段
    *
    * @return $this
    */
    public function setOrderField($orderField)
    {
        $this->container['orderField'] = $orderField;
        return $this;
    }

    /**
    * Gets orderRule
    *  排序规则
    *
    * @return string|null
    */
    public function getOrderRule()
    {
        return $this->container['orderRule'];
    }

    /**
    * Sets orderRule
    *
    * @param string|null $orderRule 排序规则
    *
    * @return $this
    */
    public function setOrderRule($orderRule)
    {
        $this->container['orderRule'] = $orderRule;
        return $this;
    }

    /**
    * Gets filterField
    *  筛选字段
    *
    * @return string|null
    */
    public function getFilterField()
    {
        return $this->container['filterField'];
    }

    /**
    * Sets filterField
    *
    * @param string|null $filterField 筛选字段
    *
    * @return $this
    */
    public function setFilterField($filterField)
    {
        $this->container['filterField'] = $filterField;
        return $this;
    }

    /**
    * Gets filterContent
    *  筛选关键字
    *
    * @return string|null
    */
    public function getFilterContent()
    {
        return $this->container['filterContent'];
    }

    /**
    * Sets filterContent
    *
    * @param string|null $filterContent 筛选关键字
    *
    * @return $this
    */
    public function setFilterContent($filterContent)
    {
        $this->container['filterContent'] = $filterContent;
        return $this;
    }

    /**
    * Gets beginTime
    *  开始时间戳
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime 开始时间戳
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间戳
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 结束时间戳
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets xLanguage
    *  语言
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 语言
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets transferType
    *  转储任务类型，默认为manual manual:手动转储任务 auto:自动转储任务
    *
    * @return string|null
    */
    public function getTransferType()
    {
        return $this->container['transferType'];
    }

    /**
    * Sets transferType
    *
    * @param string|null $transferType 转储任务类型，默认为manual manual:手动转储任务 auto:自动转储任务
    *
    * @return $this
    */
    public function setTransferType($transferType)
    {
        $this->container['transferType'] = $transferType;
        return $this;
    }

    /**
    * Gets offset
    *  分页页码
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
    * @param int|null $offset 分页页码
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

