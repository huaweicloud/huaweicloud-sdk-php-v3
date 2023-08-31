<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateWidgetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateWidgetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * widgetId  视图id
    * retStatus  修改结果；成功: successful, 失败: error
    * errorMsg  如果失败则返回失败信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'widgetId' => 'string',
            'retStatus' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * widgetId  视图id
    * retStatus  修改结果；成功: successful, 失败: error
    * errorMsg  如果失败则返回失败信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'widgetId' => null,
        'retStatus' => null,
        'errorMsg' => null
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
    * widgetId  视图id
    * retStatus  修改结果；成功: successful, 失败: error
    * errorMsg  如果失败则返回失败信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'widgetId' => 'widget_id',
            'retStatus' => 'ret_status',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * widgetId  视图id
    * retStatus  修改结果；成功: successful, 失败: error
    * errorMsg  如果失败则返回失败信息
    *
    * @var string[]
    */
    protected static $setters = [
            'widgetId' => 'setWidgetId',
            'retStatus' => 'setRetStatus',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * widgetId  视图id
    * retStatus  修改结果；成功: successful, 失败: error
    * errorMsg  如果失败则返回失败信息
    *
    * @var string[]
    */
    protected static $getters = [
            'widgetId' => 'getWidgetId',
            'retStatus' => 'getRetStatus',
            'errorMsg' => 'getErrorMsg'
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
    const RET_STATUS_SUCCESSFUL = 'successful';
    const RET_STATUS_ERROR = 'error';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRetStatusAllowableValues()
    {
        return [
            self::RET_STATUS_SUCCESSFUL,
            self::RET_STATUS_ERROR,
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
        $this->container['widgetId'] = isset($data['widgetId']) ? $data['widgetId'] : null;
        $this->container['retStatus'] = isset($data['retStatus']) ? $data['retStatus'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['widgetId']) && !preg_match("/^wg([a-z]|[A-Z]|[0-9]){22}$/", $this->container['widgetId'])) {
                $invalidProperties[] = "invalid value for 'widgetId', must be conform to the pattern /^wg([a-z]|[A-Z]|[0-9]){22}$/.";
            }
            $allowedValues = $this->getRetStatusAllowableValues();
                if (!is_null($this->container['retStatus']) && !in_array($this->container['retStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'retStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) > 2048)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be bigger than or equal to 1.";
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
    * Gets widgetId
    *  视图id
    *
    * @return string|null
    */
    public function getWidgetId()
    {
        return $this->container['widgetId'];
    }

    /**
    * Sets widgetId
    *
    * @param string|null $widgetId 视图id
    *
    * @return $this
    */
    public function setWidgetId($widgetId)
    {
        $this->container['widgetId'] = $widgetId;
        return $this;
    }

    /**
    * Gets retStatus
    *  修改结果；成功: successful, 失败: error
    *
    * @return string|null
    */
    public function getRetStatus()
    {
        return $this->container['retStatus'];
    }

    /**
    * Sets retStatus
    *
    * @param string|null $retStatus 修改结果；成功: successful, 失败: error
    *
    * @return $this
    */
    public function setRetStatus($retStatus)
    {
        $this->container['retStatus'] = $retStatus;
        return $this;
    }

    /**
    * Gets errorMsg
    *  如果失败则返回失败信息
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 如果失败则返回失败信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

