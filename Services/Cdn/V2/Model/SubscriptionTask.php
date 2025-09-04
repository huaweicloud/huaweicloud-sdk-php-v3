<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubscriptionTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubscriptionTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  订阅任务id
    * createTime  创建时间
    * updateTime  最近更新时间
    * name  - 订阅任务的名称 - [单词字符] [减号] [中文字符] 长度不超过32
    * periodType  - 订阅任务类型，类型如下： - 0：日报 - 1：周报 - 2：月报
    * emails  接收运营报表的邮箱地址。支持同时输入多个邮箱地址，多个邮箱地址用英文逗号（,）分隔。
    * domainName  订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    * reportType  - 运营报表类型。支持同时输入多个报表类型，多个报表类型以英文逗号（,）分隔。 - 0：访问区域分布 - 1：国家分布 - 2：运营商分布 - 3：域名排行（按流量排序） - 4：热门URL（按流量排序） - 5：热门URL（按请求数排序） - 6：热门Referer（按流量排序） - 7：热门Referer（按请求数排序） - 10：回源热门URL（按流量排序） - 11：回源热门URL（按请求数排序） - 13：热门UA（按流量排序） - 14：热门UA（按请求数排序）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'createTime' => 'int',
            'updateTime' => 'int',
            'name' => 'string',
            'periodType' => 'int',
            'emails' => 'string',
            'domainName' => 'string',
            'reportType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  订阅任务id
    * createTime  创建时间
    * updateTime  最近更新时间
    * name  - 订阅任务的名称 - [单词字符] [减号] [中文字符] 长度不超过32
    * periodType  - 订阅任务类型，类型如下： - 0：日报 - 1：周报 - 2：月报
    * emails  接收运营报表的邮箱地址。支持同时输入多个邮箱地址，多个邮箱地址用英文逗号（,）分隔。
    * domainName  订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    * reportType  - 运营报表类型。支持同时输入多个报表类型，多个报表类型以英文逗号（,）分隔。 - 0：访问区域分布 - 1：国家分布 - 2：运营商分布 - 3：域名排行（按流量排序） - 4：热门URL（按流量排序） - 5：热门URL（按请求数排序） - 6：热门Referer（按流量排序） - 7：热门Referer（按请求数排序） - 10：回源热门URL（按流量排序） - 11：回源热门URL（按请求数排序） - 13：热门UA（按流量排序） - 14：热门UA（按请求数排序）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'name' => null,
        'periodType' => null,
        'emails' => null,
        'domainName' => null,
        'reportType' => null
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
    * id  订阅任务id
    * createTime  创建时间
    * updateTime  最近更新时间
    * name  - 订阅任务的名称 - [单词字符] [减号] [中文字符] 长度不超过32
    * periodType  - 订阅任务类型，类型如下： - 0：日报 - 1：周报 - 2：月报
    * emails  接收运营报表的邮箱地址。支持同时输入多个邮箱地址，多个邮箱地址用英文逗号（,）分隔。
    * domainName  订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    * reportType  - 运营报表类型。支持同时输入多个报表类型，多个报表类型以英文逗号（,）分隔。 - 0：访问区域分布 - 1：国家分布 - 2：运营商分布 - 3：域名排行（按流量排序） - 4：热门URL（按流量排序） - 5：热门URL（按请求数排序） - 6：热门Referer（按流量排序） - 7：热门Referer（按请求数排序） - 10：回源热门URL（按流量排序） - 11：回源热门URL（按请求数排序） - 13：热门UA（按流量排序） - 14：热门UA（按请求数排序）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'name' => 'name',
            'periodType' => 'period_type',
            'emails' => 'emails',
            'domainName' => 'domain_name',
            'reportType' => 'report_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  订阅任务id
    * createTime  创建时间
    * updateTime  最近更新时间
    * name  - 订阅任务的名称 - [单词字符] [减号] [中文字符] 长度不超过32
    * periodType  - 订阅任务类型，类型如下： - 0：日报 - 1：周报 - 2：月报
    * emails  接收运营报表的邮箱地址。支持同时输入多个邮箱地址，多个邮箱地址用英文逗号（,）分隔。
    * domainName  订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    * reportType  - 运营报表类型。支持同时输入多个报表类型，多个报表类型以英文逗号（,）分隔。 - 0：访问区域分布 - 1：国家分布 - 2：运营商分布 - 3：域名排行（按流量排序） - 4：热门URL（按流量排序） - 5：热门URL（按请求数排序） - 6：热门Referer（按流量排序） - 7：热门Referer（按请求数排序） - 10：回源热门URL（按流量排序） - 11：回源热门URL（按请求数排序） - 13：热门UA（按流量排序） - 14：热门UA（按请求数排序）
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'name' => 'setName',
            'periodType' => 'setPeriodType',
            'emails' => 'setEmails',
            'domainName' => 'setDomainName',
            'reportType' => 'setReportType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  订阅任务id
    * createTime  创建时间
    * updateTime  最近更新时间
    * name  - 订阅任务的名称 - [单词字符] [减号] [中文字符] 长度不超过32
    * periodType  - 订阅任务类型，类型如下： - 0：日报 - 1：周报 - 2：月报
    * emails  接收运营报表的邮箱地址。支持同时输入多个邮箱地址，多个邮箱地址用英文逗号（,）分隔。
    * domainName  订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    * reportType  - 运营报表类型。支持同时输入多个报表类型，多个报表类型以英文逗号（,）分隔。 - 0：访问区域分布 - 1：国家分布 - 2：运营商分布 - 3：域名排行（按流量排序） - 4：热门URL（按流量排序） - 5：热门URL（按请求数排序） - 6：热门Referer（按流量排序） - 7：热门Referer（按请求数排序） - 10：回源热门URL（按流量排序） - 11：回源热门URL（按请求数排序） - 13：热门UA（按流量排序） - 14：热门UA（按请求数排序）
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'name' => 'getName',
            'periodType' => 'getPeriodType',
            'emails' => 'getEmails',
            'domainName' => 'getDomainName',
            'reportType' => 'getReportType'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['reportType'] = isset($data['reportType']) ? $data['reportType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 999999999)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 999999999.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 4102416000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 4102416000000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 4102416000000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 4102416000000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['periodType']) && ($this->container['periodType'] > 2)) {
                $invalidProperties[] = "invalid value for 'periodType', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['periodType']) && ($this->container['periodType'] < 0)) {
                $invalidProperties[] = "invalid value for 'periodType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['emails']) && (mb_strlen($this->container['emails']) > 65536)) {
                $invalidProperties[] = "invalid value for 'emails', the character length must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['emails']) && (mb_strlen($this->container['emails']) < 0)) {
                $invalidProperties[] = "invalid value for 'emails', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 65536)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reportType']) && (mb_strlen($this->container['reportType']) > 65536)) {
                $invalidProperties[] = "invalid value for 'reportType', the character length must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['reportType']) && (mb_strlen($this->container['reportType']) < 0)) {
                $invalidProperties[] = "invalid value for 'reportType', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  订阅任务id
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
    * @param int|null $id 订阅任务id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets updateTime
    *  最近更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 最近更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets name
    *  - 订阅任务的名称 - [单词字符] [减号] [中文字符] 长度不超过32
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
    * @param string|null $name - 订阅任务的名称 - [单词字符] [减号] [中文字符] 长度不超过32
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets periodType
    *  - 订阅任务类型，类型如下： - 0：日报 - 1：周报 - 2：月报
    *
    * @return int|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int|null $periodType - 订阅任务类型，类型如下： - 0：日报 - 1：周报 - 2：月报
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets emails
    *  接收运营报表的邮箱地址。支持同时输入多个邮箱地址，多个邮箱地址用英文逗号（,）分隔。
    *
    * @return string|null
    */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
    * Sets emails
    *
    * @param string|null $emails 接收运营报表的邮箱地址。支持同时输入多个邮箱地址，多个邮箱地址用英文逗号（,）分隔。
    *
    * @return $this
    */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;
        return $this;
    }

    /**
    * Gets domainName
    *  订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 订阅的域名列表，支持同时输入多个域名，多个域名用半角逗号（,）分隔；说明：如果该参数为all，则为账号下的所有域名订阅运营报表。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets reportType
    *  - 运营报表类型。支持同时输入多个报表类型，多个报表类型以英文逗号（,）分隔。 - 0：访问区域分布 - 1：国家分布 - 2：运营商分布 - 3：域名排行（按流量排序） - 4：热门URL（按流量排序） - 5：热门URL（按请求数排序） - 6：热门Referer（按流量排序） - 7：热门Referer（按请求数排序） - 10：回源热门URL（按流量排序） - 11：回源热门URL（按请求数排序） - 13：热门UA（按流量排序） - 14：热门UA（按请求数排序）
    *
    * @return string|null
    */
    public function getReportType()
    {
        return $this->container['reportType'];
    }

    /**
    * Sets reportType
    *
    * @param string|null $reportType - 运营报表类型。支持同时输入多个报表类型，多个报表类型以英文逗号（,）分隔。 - 0：访问区域分布 - 1：国家分布 - 2：运营商分布 - 3：域名排行（按流量排序） - 4：热门URL（按流量排序） - 5：热门URL（按请求数排序） - 6：热门Referer（按流量排序） - 7：热门Referer（按请求数排序） - 10：回源热门URL（按流量排序） - 11：回源热门URL（按请求数排序） - 13：热门UA（按流量排序） - 14：热门UA（按请求数排序）
    *
    * @return $this
    */
    public function setReportType($reportType)
    {
        $this->container['reportType'] = $reportType;
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

