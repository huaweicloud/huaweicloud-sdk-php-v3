<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAsyncJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAsyncJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  请求语言类型。
    * asyncJobId  批量异步创建的任务ID。
    * status  批量异步创建的任务状态。
    * domainName  批量异步创建的任务的租户名。
    * userName  批量异步创建的任务的用户名。
    * offset  偏移量，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'asyncJobId' => 'string',
            'status' => 'string',
            'domainName' => 'string',
            'userName' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  请求语言类型。
    * asyncJobId  批量异步创建的任务ID。
    * status  批量异步创建的任务状态。
    * domainName  批量异步创建的任务的租户名。
    * userName  批量异步创建的任务的用户名。
    * offset  偏移量，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'asyncJobId' => null,
        'status' => null,
        'domainName' => null,
        'userName' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'sortKey' => null,
        'sortDir' => null
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
    * xLanguage  请求语言类型。
    * asyncJobId  批量异步创建的任务ID。
    * status  批量异步创建的任务状态。
    * domainName  批量异步创建的任务的租户名。
    * userName  批量异步创建的任务的用户名。
    * offset  偏移量，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'asyncJobId' => 'async_job_id',
            'status' => 'status',
            'domainName' => 'domain_name',
            'userName' => 'user_name',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  请求语言类型。
    * asyncJobId  批量异步创建的任务ID。
    * status  批量异步创建的任务状态。
    * domainName  批量异步创建的任务的租户名。
    * userName  批量异步创建的任务的用户名。
    * offset  偏移量，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'asyncJobId' => 'setAsyncJobId',
            'status' => 'setStatus',
            'domainName' => 'setDomainName',
            'userName' => 'setUserName',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  请求语言类型。
    * asyncJobId  批量异步创建的任务ID。
    * status  批量异步创建的任务状态。
    * domainName  批量异步创建的任务的租户名。
    * userName  批量异步创建的任务的用户名。
    * offset  偏移量，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'asyncJobId' => 'getAsyncJobId',
            'status' => 'getStatus',
            'domainName' => 'getDomainName',
            'userName' => 'getUserName',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir'
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
    const X_LANGUAGE_EN_US = 'en-us';
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_EN_US,
            self::X_LANGUAGE_ZH_CN,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : 'en-us';
        $this->container['asyncJobId'] = isset($data['asyncJobId']) ? $data['asyncJobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets xLanguage
    *  请求语言类型。
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
    * @param string|null $xLanguage 请求语言类型。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets asyncJobId
    *  批量异步创建的任务ID。
    *
    * @return string|null
    */
    public function getAsyncJobId()
    {
        return $this->container['asyncJobId'];
    }

    /**
    * Sets asyncJobId
    *
    * @param string|null $asyncJobId 批量异步创建的任务ID。
    *
    * @return $this
    */
    public function setAsyncJobId($asyncJobId)
    {
        $this->container['asyncJobId'] = $asyncJobId;
        return $this;
    }

    /**
    * Gets status
    *  批量异步创建的任务状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 批量异步创建的任务状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets domainName
    *  批量异步创建的任务的租户名。
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
    * @param string|null $domainName 批量异步创建的任务的租户名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets userName
    *  批量异步创建的任务的用户名。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 批量异步创建的任务的用户名。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示查询该偏移量后面的记录。
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
    * @param int|null $offset 偏移量，表示查询该偏移量后面的记录。
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
    *  查询返回记录的数量限制。
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
    * @param int|null $limit 查询返回记录的数量限制。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  返回结果按该关键字排序，默认为“create_time”。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 返回结果按该关键字排序，默认为“create_time”。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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

