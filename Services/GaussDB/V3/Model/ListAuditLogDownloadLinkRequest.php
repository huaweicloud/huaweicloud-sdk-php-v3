<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAuditLogDownloadLinkRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAuditLogDownloadLinkRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * instanceId  实例ID，严格匹配UUID规则。
    * nodeId  节点ID。 - 若输入，则只获取该节点的全量SQL下载链接。 - 若不输入，则获取该实例所有节点的全量SQL下载链接。
    * lastFileName  上次查询的最后一个文件的文件名。 - 若输入，则从该文件名以后按字典顺序开始查询。 - 若不输入，则从第一个文件开始查询。
    * limit  一次查询返回的文件数量。  默认值为10，取值范围：1~50之间的整数值。
    * startTime  开始时间，不得早于实例创建时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  结束时间，不得晚于当前时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'instanceId' => 'string',
            'nodeId' => 'string',
            'lastFileName' => 'string',
            'limit' => 'int',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * instanceId  实例ID，严格匹配UUID规则。
    * nodeId  节点ID。 - 若输入，则只获取该节点的全量SQL下载链接。 - 若不输入，则获取该实例所有节点的全量SQL下载链接。
    * lastFileName  上次查询的最后一个文件的文件名。 - 若输入，则从该文件名以后按字典顺序开始查询。 - 若不输入，则从第一个文件开始查询。
    * limit  一次查询返回的文件数量。  默认值为10，取值范围：1~50之间的整数值。
    * startTime  开始时间，不得早于实例创建时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  结束时间，不得晚于当前时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'instanceId' => null,
        'nodeId' => null,
        'lastFileName' => null,
        'limit' => 'int32',
        'startTime' => null,
        'endTime' => null
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
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * instanceId  实例ID，严格匹配UUID规则。
    * nodeId  节点ID。 - 若输入，则只获取该节点的全量SQL下载链接。 - 若不输入，则获取该实例所有节点的全量SQL下载链接。
    * lastFileName  上次查询的最后一个文件的文件名。 - 若输入，则从该文件名以后按字典顺序开始查询。 - 若不输入，则从第一个文件开始查询。
    * limit  一次查询返回的文件数量。  默认值为10，取值范围：1~50之间的整数值。
    * startTime  开始时间，不得早于实例创建时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  结束时间，不得晚于当前时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id',
            'lastFileName' => 'last_file_name',
            'limit' => 'limit',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * instanceId  实例ID，严格匹配UUID规则。
    * nodeId  节点ID。 - 若输入，则只获取该节点的全量SQL下载链接。 - 若不输入，则获取该实例所有节点的全量SQL下载链接。
    * lastFileName  上次查询的最后一个文件的文件名。 - 若输入，则从该文件名以后按字典顺序开始查询。 - 若不输入，则从第一个文件开始查询。
    * limit  一次查询返回的文件数量。  默认值为10，取值范围：1~50之间的整数值。
    * startTime  开始时间，不得早于实例创建时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  结束时间，不得晚于当前时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId',
            'lastFileName' => 'setLastFileName',
            'limit' => 'setLimit',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * instanceId  实例ID，严格匹配UUID规则。
    * nodeId  节点ID。 - 若输入，则只获取该节点的全量SQL下载链接。 - 若不输入，则获取该实例所有节点的全量SQL下载链接。
    * lastFileName  上次查询的最后一个文件的文件名。 - 若输入，则从该文件名以后按字典顺序开始查询。 - 若不输入，则从第一个文件开始查询。
    * limit  一次查询返回的文件数量。  默认值为10，取值范围：1~50之间的整数值。
    * startTime  开始时间，不得早于实例创建时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * endTime  结束时间，不得晚于当前时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId',
            'lastFileName' => 'getLastFileName',
            'limit' => 'getLimit',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['lastFileName'] = isset($data['lastFileName']) ? $data['lastFileName'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    *  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
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
    * @param string|null $xLanguage 请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID，严格匹配UUID规则。
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
    * @param string $instanceId 实例ID，严格匹配UUID规则。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID。 - 若输入，则只获取该节点的全量SQL下载链接。 - 若不输入，则获取该实例所有节点的全量SQL下载链接。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID。 - 若输入，则只获取该节点的全量SQL下载链接。 - 若不输入，则获取该实例所有节点的全量SQL下载链接。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets lastFileName
    *  上次查询的最后一个文件的文件名。 - 若输入，则从该文件名以后按字典顺序开始查询。 - 若不输入，则从第一个文件开始查询。
    *
    * @return string|null
    */
    public function getLastFileName()
    {
        return $this->container['lastFileName'];
    }

    /**
    * Sets lastFileName
    *
    * @param string|null $lastFileName 上次查询的最后一个文件的文件名。 - 若输入，则从该文件名以后按字典顺序开始查询。 - 若不输入，则从第一个文件开始查询。
    *
    * @return $this
    */
    public function setLastFileName($lastFileName)
    {
        $this->container['lastFileName'] = $lastFileName;
        return $this;
    }

    /**
    * Gets limit
    *  一次查询返回的文件数量。  默认值为10，取值范围：1~50之间的整数值。
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
    * @param int|null $limit 一次查询返回的文件数量。  默认值为10，取值范围：1~50之间的整数值。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间，不得早于实例创建时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始时间，不得早于实例创建时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
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
    *  结束时间，不得晚于当前时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间，不得晚于当前时间。格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

