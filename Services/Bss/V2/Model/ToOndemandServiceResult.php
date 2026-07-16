<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ToOndemandServiceResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ToOndemandServiceResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  |参数名称：转按需的服务实例id/根资源id| |参数约束以及描述：转按需的服务实例id/根资源id。对应请求体中的资源id。|
    * result  |参数名称：转按需结果| |参数约束以及描述：转按需结果。SUCCESS：成功；AUDIT：审核中；FAIL：转按需失败。|
    * errorCode  |参数名称：状态码| |参数约束以及描述：状态码，result=FAIL时，必填|
    * errorMsg  |参数名称：错误描述信息| |参数约束以及描述：错误描述信息，result=FAIL时，必填|
    * orderId  |参数名称：订单Id| |参数约束以及描述：订单Id。result= SUCCESS、 AUDIT时，必填；其他为空。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'result' => 'string',
            'errorCode' => 'string',
            'errorMsg' => 'string',
            'orderId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  |参数名称：转按需的服务实例id/根资源id| |参数约束以及描述：转按需的服务实例id/根资源id。对应请求体中的资源id。|
    * result  |参数名称：转按需结果| |参数约束以及描述：转按需结果。SUCCESS：成功；AUDIT：审核中；FAIL：转按需失败。|
    * errorCode  |参数名称：状态码| |参数约束以及描述：状态码，result=FAIL时，必填|
    * errorMsg  |参数名称：错误描述信息| |参数约束以及描述：错误描述信息，result=FAIL时，必填|
    * orderId  |参数名称：订单Id| |参数约束以及描述：订单Id。result= SUCCESS、 AUDIT时，必填；其他为空。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'result' => null,
        'errorCode' => null,
        'errorMsg' => null,
        'orderId' => null
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
    * resourceId  |参数名称：转按需的服务实例id/根资源id| |参数约束以及描述：转按需的服务实例id/根资源id。对应请求体中的资源id。|
    * result  |参数名称：转按需结果| |参数约束以及描述：转按需结果。SUCCESS：成功；AUDIT：审核中；FAIL：转按需失败。|
    * errorCode  |参数名称：状态码| |参数约束以及描述：状态码，result=FAIL时，必填|
    * errorMsg  |参数名称：错误描述信息| |参数约束以及描述：错误描述信息，result=FAIL时，必填|
    * orderId  |参数名称：订单Id| |参数约束以及描述：订单Id。result= SUCCESS、 AUDIT时，必填；其他为空。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'result' => 'result',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg',
            'orderId' => 'order_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  |参数名称：转按需的服务实例id/根资源id| |参数约束以及描述：转按需的服务实例id/根资源id。对应请求体中的资源id。|
    * result  |参数名称：转按需结果| |参数约束以及描述：转按需结果。SUCCESS：成功；AUDIT：审核中；FAIL：转按需失败。|
    * errorCode  |参数名称：状态码| |参数约束以及描述：状态码，result=FAIL时，必填|
    * errorMsg  |参数名称：错误描述信息| |参数约束以及描述：错误描述信息，result=FAIL时，必填|
    * orderId  |参数名称：订单Id| |参数约束以及描述：订单Id。result= SUCCESS、 AUDIT时，必填；其他为空。|
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'result' => 'setResult',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg',
            'orderId' => 'setOrderId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  |参数名称：转按需的服务实例id/根资源id| |参数约束以及描述：转按需的服务实例id/根资源id。对应请求体中的资源id。|
    * result  |参数名称：转按需结果| |参数约束以及描述：转按需结果。SUCCESS：成功；AUDIT：审核中；FAIL：转按需失败。|
    * errorCode  |参数名称：状态码| |参数约束以及描述：状态码，result=FAIL时，必填|
    * errorMsg  |参数名称：错误描述信息| |参数约束以及描述：错误描述信息，result=FAIL时，必填|
    * orderId  |参数名称：订单Id| |参数约束以及描述：订单Id。result= SUCCESS、 AUDIT时，必填；其他为空。|
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'result' => 'getResult',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg',
            'orderId' => 'getOrderId'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['result']) && (mb_strlen($this->container['result']) > 32)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['result']) && (mb_strlen($this->container['result']) < 0)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) > 1000)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 64)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
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
    * Gets resourceId
    *  |参数名称：转按需的服务实例id/根资源id| |参数约束以及描述：转按需的服务实例id/根资源id。对应请求体中的资源id。|
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId |参数名称：转按需的服务实例id/根资源id| |参数约束以及描述：转按需的服务实例id/根资源id。对应请求体中的资源id。|
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets result
    *  |参数名称：转按需结果| |参数约束以及描述：转按需结果。SUCCESS：成功；AUDIT：审核中；FAIL：转按需失败。|
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result |参数名称：转按需结果| |参数约束以及描述：转按需结果。SUCCESS：成功；AUDIT：审核中；FAIL：转按需失败。|
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets errorCode
    *  |参数名称：状态码| |参数约束以及描述：状态码，result=FAIL时，必填|
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode |参数名称：状态码| |参数约束以及描述：状态码，result=FAIL时，必填|
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  |参数名称：错误描述信息| |参数约束以及描述：错误描述信息，result=FAIL时，必填|
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
    * @param string|null $errorMsg |参数名称：错误描述信息| |参数约束以及描述：错误描述信息，result=FAIL时，必填|
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets orderId
    *  |参数名称：订单Id| |参数约束以及描述：订单Id。result= SUCCESS、 AUDIT时，必填；其他为空。|
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId |参数名称：订单Id| |参数约束以及描述：订单Id。result= SUCCESS、 AUDIT时，必填；其他为空。|
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
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

