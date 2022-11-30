<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TranscodeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TranscodeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateGroupName  转码模板组名称。
    * output  转码输出数组。 - HLS或DASH格式：此数组的成员个数为n+1，n为转码输出路数。 - MP4格式：此数组的成员个数为n，n为转码输出路数。
    * execDesc  执行情况描述。
    * transcodeStatus  转码状态。  取值如下： - UN_TRANSCODE：未转码 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中 - TRANSCODE_SUCCEED：转码成功 - TRANSCODE_FAILED：转码失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateGroupName' => 'string',
            'output' => '\HuaweiCloud\SDK\Vod\V1\Model\Output[]',
            'execDesc' => 'string',
            'transcodeStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateGroupName  转码模板组名称。
    * output  转码输出数组。 - HLS或DASH格式：此数组的成员个数为n+1，n为转码输出路数。 - MP4格式：此数组的成员个数为n，n为转码输出路数。
    * execDesc  执行情况描述。
    * transcodeStatus  转码状态。  取值如下： - UN_TRANSCODE：未转码 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中 - TRANSCODE_SUCCEED：转码成功 - TRANSCODE_FAILED：转码失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateGroupName' => null,
        'output' => null,
        'execDesc' => null,
        'transcodeStatus' => null
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
    * templateGroupName  转码模板组名称。
    * output  转码输出数组。 - HLS或DASH格式：此数组的成员个数为n+1，n为转码输出路数。 - MP4格式：此数组的成员个数为n，n为转码输出路数。
    * execDesc  执行情况描述。
    * transcodeStatus  转码状态。  取值如下： - UN_TRANSCODE：未转码 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中 - TRANSCODE_SUCCEED：转码成功 - TRANSCODE_FAILED：转码失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateGroupName' => 'template_group_name',
            'output' => 'output',
            'execDesc' => 'exec_desc',
            'transcodeStatus' => 'transcode_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateGroupName  转码模板组名称。
    * output  转码输出数组。 - HLS或DASH格式：此数组的成员个数为n+1，n为转码输出路数。 - MP4格式：此数组的成员个数为n，n为转码输出路数。
    * execDesc  执行情况描述。
    * transcodeStatus  转码状态。  取值如下： - UN_TRANSCODE：未转码 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中 - TRANSCODE_SUCCEED：转码成功 - TRANSCODE_FAILED：转码失败
    *
    * @var string[]
    */
    protected static $setters = [
            'templateGroupName' => 'setTemplateGroupName',
            'output' => 'setOutput',
            'execDesc' => 'setExecDesc',
            'transcodeStatus' => 'setTranscodeStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateGroupName  转码模板组名称。
    * output  转码输出数组。 - HLS或DASH格式：此数组的成员个数为n+1，n为转码输出路数。 - MP4格式：此数组的成员个数为n，n为转码输出路数。
    * execDesc  执行情况描述。
    * transcodeStatus  转码状态。  取值如下： - UN_TRANSCODE：未转码 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中 - TRANSCODE_SUCCEED：转码成功 - TRANSCODE_FAILED：转码失败
    *
    * @var string[]
    */
    protected static $getters = [
            'templateGroupName' => 'getTemplateGroupName',
            'output' => 'getOutput',
            'execDesc' => 'getExecDesc',
            'transcodeStatus' => 'getTranscodeStatus'
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
        $this->container['templateGroupName'] = isset($data['templateGroupName']) ? $data['templateGroupName'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['execDesc'] = isset($data['execDesc']) ? $data['execDesc'] : null;
        $this->container['transcodeStatus'] = isset($data['transcodeStatus']) ? $data['transcodeStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateGroupName'] === null) {
            $invalidProperties[] = "'templateGroupName' can't be null";
        }
        if ($this->container['output'] === null) {
            $invalidProperties[] = "'output' can't be null";
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
    * Gets templateGroupName
    *  转码模板组名称。
    *
    * @return string
    */
    public function getTemplateGroupName()
    {
        return $this->container['templateGroupName'];
    }

    /**
    * Sets templateGroupName
    *
    * @param string $templateGroupName 转码模板组名称。
    *
    * @return $this
    */
    public function setTemplateGroupName($templateGroupName)
    {
        $this->container['templateGroupName'] = $templateGroupName;
        return $this;
    }

    /**
    * Gets output
    *  转码输出数组。 - HLS或DASH格式：此数组的成员个数为n+1，n为转码输出路数。 - MP4格式：此数组的成员个数为n，n为转码输出路数。
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\Output[]
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\Output[] $output 转码输出数组。 - HLS或DASH格式：此数组的成员个数为n+1，n为转码输出路数。 - MP4格式：此数组的成员个数为n，n为转码输出路数。
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets execDesc
    *  执行情况描述。
    *
    * @return string|null
    */
    public function getExecDesc()
    {
        return $this->container['execDesc'];
    }

    /**
    * Sets execDesc
    *
    * @param string|null $execDesc 执行情况描述。
    *
    * @return $this
    */
    public function setExecDesc($execDesc)
    {
        $this->container['execDesc'] = $execDesc;
        return $this;
    }

    /**
    * Gets transcodeStatus
    *  转码状态。  取值如下： - UN_TRANSCODE：未转码 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中 - TRANSCODE_SUCCEED：转码成功 - TRANSCODE_FAILED：转码失败
    *
    * @return string|null
    */
    public function getTranscodeStatus()
    {
        return $this->container['transcodeStatus'];
    }

    /**
    * Sets transcodeStatus
    *
    * @param string|null $transcodeStatus 转码状态。  取值如下： - UN_TRANSCODE：未转码 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中 - TRANSCODE_SUCCEED：转码成功 - TRANSCODE_FAILED：转码失败
    *
    * @return $this
    */
    public function setTranscodeStatus($transcodeStatus)
    {
        $this->container['transcodeStatus'] = $transcodeStatus;
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

