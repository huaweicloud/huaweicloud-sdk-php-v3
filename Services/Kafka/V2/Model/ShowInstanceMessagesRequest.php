<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceMessagesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceMessagesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * topic  Topic名称。  Topic名称必现以字母开头且只支持大小写字母、中横线、下划线以及数字。
    * asc  是否按照时间排序。
    * startTime  开始时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    * endTime  结束时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    * limit  每一页显示的message数量。
    * offset  页数。
    * download  是否下载。
    * messageOffset  消息偏移量。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    * partition  分区。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    * keyword  关键词。 取值范围为0~50。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'topic' => 'string',
            'asc' => 'bool',
            'startTime' => 'string',
            'endTime' => 'string',
            'limit' => 'string',
            'offset' => 'string',
            'download' => 'bool',
            'messageOffset' => 'string',
            'partition' => 'string',
            'keyword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * topic  Topic名称。  Topic名称必现以字母开头且只支持大小写字母、中横线、下划线以及数字。
    * asc  是否按照时间排序。
    * startTime  开始时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    * endTime  结束时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    * limit  每一页显示的message数量。
    * offset  页数。
    * download  是否下载。
    * messageOffset  消息偏移量。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    * partition  分区。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    * keyword  关键词。 取值范围为0~50。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'topic' => null,
        'asc' => null,
        'startTime' => null,
        'endTime' => null,
        'limit' => null,
        'offset' => null,
        'download' => null,
        'messageOffset' => null,
        'partition' => null,
        'keyword' => null
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
    * instanceId  实例ID。
    * topic  Topic名称。  Topic名称必现以字母开头且只支持大小写字母、中横线、下划线以及数字。
    * asc  是否按照时间排序。
    * startTime  开始时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    * endTime  结束时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    * limit  每一页显示的message数量。
    * offset  页数。
    * download  是否下载。
    * messageOffset  消息偏移量。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    * partition  分区。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    * keyword  关键词。 取值范围为0~50。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'topic' => 'topic',
            'asc' => 'asc',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'limit' => 'limit',
            'offset' => 'offset',
            'download' => 'download',
            'messageOffset' => 'message_offset',
            'partition' => 'partition',
            'keyword' => 'keyword'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * topic  Topic名称。  Topic名称必现以字母开头且只支持大小写字母、中横线、下划线以及数字。
    * asc  是否按照时间排序。
    * startTime  开始时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    * endTime  结束时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    * limit  每一页显示的message数量。
    * offset  页数。
    * download  是否下载。
    * messageOffset  消息偏移量。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    * partition  分区。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    * keyword  关键词。 取值范围为0~50。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'topic' => 'setTopic',
            'asc' => 'setAsc',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'download' => 'setDownload',
            'messageOffset' => 'setMessageOffset',
            'partition' => 'setPartition',
            'keyword' => 'setKeyword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * topic  Topic名称。  Topic名称必现以字母开头且只支持大小写字母、中横线、下划线以及数字。
    * asc  是否按照时间排序。
    * startTime  开始时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    * endTime  结束时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    * limit  每一页显示的message数量。
    * offset  页数。
    * download  是否下载。
    * messageOffset  消息偏移量。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    * partition  分区。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    * keyword  关键词。 取值范围为0~50。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'topic' => 'getTopic',
            'asc' => 'getAsc',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'download' => 'getDownload',
            'messageOffset' => 'getMessageOffset',
            'partition' => 'getPartition',
            'keyword' => 'getKeyword'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['asc'] = isset($data['asc']) ? $data['asc'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['download'] = isset($data['download']) ? $data['download'] : null;
        $this->container['messageOffset'] = isset($data['messageOffset']) ? $data['messageOffset'] : null;
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
            if (!is_null($this->container['keyword']) && (mb_strlen($this->container['keyword']) > 50)) {
                $invalidProperties[] = "invalid value for 'keyword', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['keyword']) && (mb_strlen($this->container['keyword']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyword', the character length must be bigger than or equal to 0.";
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
    * Gets instanceId
    *  实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets topic
    *  Topic名称。  Topic名称必现以字母开头且只支持大小写字母、中横线、下划线以及数字。
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic Topic名称。  Topic名称必现以字母开头且只支持大小写字母、中横线、下划线以及数字。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets asc
    *  是否按照时间排序。
    *
    * @return bool|null
    */
    public function getAsc()
    {
        return $this->container['asc'];
    }

    /**
    * Sets asc
    *
    * @param bool|null $asc 是否按照时间排序。
    *
    * @return $this
    */
    public function setAsc($asc)
    {
        $this->container['asc'] = $asc;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间。  Unix毫秒时间戳。  查询消息偏移量时，为必选参数。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets limit
    *  每一页显示的message数量。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 每一页显示的message数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  页数。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 页数。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets download
    *  是否下载。
    *
    * @return bool|null
    */
    public function getDownload()
    {
        return $this->container['download'];
    }

    /**
    * Sets download
    *
    * @param bool|null $download 是否下载。
    *
    * @return $this
    */
    public function setDownload($download)
    {
        $this->container['download'] = $download;
        return $this;
    }

    /**
    * Gets messageOffset
    *  消息偏移量。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    *
    * @return string|null
    */
    public function getMessageOffset()
    {
        return $this->container['messageOffset'];
    }

    /**
    * Sets messageOffset
    *
    * @param string|null $messageOffset 消息偏移量。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    *
    * @return $this
    */
    public function setMessageOffset($messageOffset)
    {
        $this->container['messageOffset'] = $messageOffset;
        return $this;
    }

    /**
    * Gets partition
    *  分区。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    *
    * @return string|null
    */
    public function getPartition()
    {
        return $this->container['partition'];
    }

    /**
    * Sets partition
    *
    * @param string|null $partition 分区。  **查询消息内容时，为必选参数。**  若start_time、end_time参数不为空，该参数无效。
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets keyword
    *  关键词。 取值范围为0~50。
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 关键词。 取值范围为0~50。
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
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

