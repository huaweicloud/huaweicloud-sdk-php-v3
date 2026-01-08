<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloneListenerResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloneListenerResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * listenerList  **参数解释**：新监听器相关信息。
    * requestId  **参数解释**：请求的ID 。 **取值范围**：由数字、小写字母和中划线（-）组成的字符串，自动生成。
    * jobId  **参数解释**：监听器复制任务的ID，任务详情可通过GET /v3/{project_id}/elb/jobs/{job_id}进行查询。 **取值范围**：标准的UUID格式，长度为36个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'listenerList' => '\HuaweiCloud\SDK\Elb\V3\Model\CloneListenerResp[]',
            'requestId' => 'string',
            'jobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * listenerList  **参数解释**：新监听器相关信息。
    * requestId  **参数解释**：请求的ID 。 **取值范围**：由数字、小写字母和中划线（-）组成的字符串，自动生成。
    * jobId  **参数解释**：监听器复制任务的ID，任务详情可通过GET /v3/{project_id}/elb/jobs/{job_id}进行查询。 **取值范围**：标准的UUID格式，长度为36个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'listenerList' => null,
        'requestId' => null,
        'jobId' => null
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
    * listenerList  **参数解释**：新监听器相关信息。
    * requestId  **参数解释**：请求的ID 。 **取值范围**：由数字、小写字母和中划线（-）组成的字符串，自动生成。
    * jobId  **参数解释**：监听器复制任务的ID，任务详情可通过GET /v3/{project_id}/elb/jobs/{job_id}进行查询。 **取值范围**：标准的UUID格式，长度为36个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'listenerList' => 'listener_list',
            'requestId' => 'request_id',
            'jobId' => 'job_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * listenerList  **参数解释**：新监听器相关信息。
    * requestId  **参数解释**：请求的ID 。 **取值范围**：由数字、小写字母和中划线（-）组成的字符串，自动生成。
    * jobId  **参数解释**：监听器复制任务的ID，任务详情可通过GET /v3/{project_id}/elb/jobs/{job_id}进行查询。 **取值范围**：标准的UUID格式，长度为36个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'listenerList' => 'setListenerList',
            'requestId' => 'setRequestId',
            'jobId' => 'setJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * listenerList  **参数解释**：新监听器相关信息。
    * requestId  **参数解释**：请求的ID 。 **取值范围**：由数字、小写字母和中划线（-）组成的字符串，自动生成。
    * jobId  **参数解释**：监听器复制任务的ID，任务详情可通过GET /v3/{project_id}/elb/jobs/{job_id}进行查询。 **取值范围**：标准的UUID格式，长度为36个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'listenerList' => 'getListenerList',
            'requestId' => 'getRequestId',
            'jobId' => 'getJobId'
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
        $this->container['listenerList'] = isset($data['listenerList']) ? $data['listenerList'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 36)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 1)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 1.";
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
    * Gets listenerList
    *  **参数解释**：新监听器相关信息。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CloneListenerResp[]|null
    */
    public function getListenerList()
    {
        return $this->container['listenerList'];
    }

    /**
    * Sets listenerList
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CloneListenerResp[]|null $listenerList **参数解释**：新监听器相关信息。
    *
    * @return $this
    */
    public function setListenerList($listenerList)
    {
        $this->container['listenerList'] = $listenerList;
        return $this;
    }

    /**
    * Gets requestId
    *  **参数解释**：请求的ID 。 **取值范围**：由数字、小写字母和中划线（-）组成的字符串，自动生成。
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId **参数解释**：请求的ID 。 **取值范围**：由数字、小写字母和中划线（-）组成的字符串，自动生成。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释**：监听器复制任务的ID，任务详情可通过GET /v3/{project_id}/elb/jobs/{job_id}进行查询。 **取值范围**：标准的UUID格式，长度为36个字符。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释**：监听器复制任务的ID，任务详情可通过GET /v3/{project_id}/elb/jobs/{job_id}进行查询。 **取值范围**：标准的UUID格式，长度为36个字符。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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

