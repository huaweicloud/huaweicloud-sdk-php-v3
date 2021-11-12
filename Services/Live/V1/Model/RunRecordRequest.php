<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunRecordRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunRecordRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  操作行为。 取值如下： - START：对指定流开始录制，必须在直播流已经推送情况下才能正常启动，使用此命令启动录制的直播流如果发生了断流且超出断流时长，就会停止录制，并且重新推流后不会自动启动录制。 - STOP：对指定流停止录制。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'body' => '\HuaweiCloud\SDK\Live\V1\Model\RecordControlInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  操作行为。 取值如下： - START：对指定流开始录制，必须在直播流已经推送情况下才能正常启动，使用此命令启动录制的直播流如果发生了断流且超出断流时长，就会停止录制，并且重新推流后不会自动启动录制。 - STOP：对指定流停止录制。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'body' => null
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
    * action  操作行为。 取值如下： - START：对指定流开始录制，必须在直播流已经推送情况下才能正常启动，使用此命令启动录制的直播流如果发生了断流且超出断流时长，就会停止录制，并且重新推流后不会自动启动录制。 - STOP：对指定流停止录制。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  操作行为。 取值如下： - START：对指定流开始录制，必须在直播流已经推送情况下才能正常启动，使用此命令启动录制的直播流如果发生了断流且超出断流时长，就会停止录制，并且重新推流后不会自动启动录制。 - STOP：对指定流停止录制。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  操作行为。 取值如下： - START：对指定流开始录制，必须在直播流已经推送情况下才能正常启动，使用此命令启动录制的直播流如果发生了断流且超出断流时长，就会停止录制，并且重新推流后不会自动启动录制。 - STOP：对指定流停止录制。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'body' => 'getBody'
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
    const ACTION_START = 'START';
    const ACTION_STOP = 'STOP';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_START,
            self::ACTION_STOP,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['action']) > 10)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
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
    * Gets action
    *  操作行为。 取值如下： - START：对指定流开始录制，必须在直播流已经推送情况下才能正常启动，使用此命令启动录制的直播流如果发生了断流且超出断流时长，就会停止录制，并且重新推流后不会自动启动录制。 - STOP：对指定流停止录制。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 操作行为。 取值如下： - START：对指定流开始录制，必须在直播流已经推送情况下才能正常启动，使用此命令启动录制的直播流如果发生了断流且超出断流时长，就会停止录制，并且重新推流后不会自动启动录制。 - STOP：对指定流停止录制。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\RecordControlInfo|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\RecordControlInfo|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

