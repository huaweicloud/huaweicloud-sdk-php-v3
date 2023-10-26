<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PushEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PushEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xEnterprisePrjectId  告警所属的企业项目id。
    * action  接口请求动作。action=clear代表清除告警，不传或者传其他值默认为上报动作。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xEnterprisePrjectId' => 'string',
            'action' => 'string',
            'body' => '\HuaweiCloud\SDK\Aom\V2\Model\EventList'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xEnterprisePrjectId  告警所属的企业项目id。
    * action  接口请求动作。action=clear代表清除告警，不传或者传其他值默认为上报动作。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xEnterprisePrjectId' => null,
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
    * xEnterprisePrjectId  告警所属的企业项目id。
    * action  接口请求动作。action=clear代表清除告警，不传或者传其他值默认为上报动作。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xEnterprisePrjectId' => 'x-enterprise-prject-id',
            'action' => 'action',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xEnterprisePrjectId  告警所属的企业项目id。
    * action  接口请求动作。action=clear代表清除告警，不传或者传其他值默认为上报动作。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'xEnterprisePrjectId' => 'setXEnterprisePrjectId',
            'action' => 'setAction',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xEnterprisePrjectId  告警所属的企业项目id。
    * action  接口请求动作。action=clear代表清除告警，不传或者传其他值默认为上报动作。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'xEnterprisePrjectId' => 'getXEnterprisePrjectId',
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
    const ACTION_CLEAR = 'clear';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_CLEAR,
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
        $this->container['xEnterprisePrjectId'] = isset($data['xEnterprisePrjectId']) ? $data['xEnterprisePrjectId'] : null;
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
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
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
    * Gets xEnterprisePrjectId
    *  告警所属的企业项目id。
    *
    * @return string|null
    */
    public function getXEnterprisePrjectId()
    {
        return $this->container['xEnterprisePrjectId'];
    }

    /**
    * Sets xEnterprisePrjectId
    *
    * @param string|null $xEnterprisePrjectId 告警所属的企业项目id。
    *
    * @return $this
    */
    public function setXEnterprisePrjectId($xEnterprisePrjectId)
    {
        $this->container['xEnterprisePrjectId'] = $xEnterprisePrjectId;
        return $this;
    }

    /**
    * Gets action
    *  接口请求动作。action=clear代表清除告警，不传或者传其他值默认为上报动作。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 接口请求动作。action=clear代表清除告警，不传或者传其他值默认为上报动作。
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
    * @return \HuaweiCloud\SDK\Aom\V2\Model\EventList|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\EventList|null $body body
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

