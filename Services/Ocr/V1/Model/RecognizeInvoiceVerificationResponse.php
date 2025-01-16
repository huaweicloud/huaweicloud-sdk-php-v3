<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecognizeInvoiceVerificationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecognizeInvoiceVerificationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  调用成功时表示调用结果，详情参见[响应参数](https://support.huaweicloud.com/api-ocr/ocr_03_0134.html#ocr_03_0134__table266mcpsimp)。  调用失败时无此字段。 依据发票类型不同，返回参数不同。 - 增值税发票   含增值税专用发票、增值税普通发票、增值税普通发票（卷式）、增值税电子专用发票、增值税电子普通发票、增值税电子普通发票（通行费）、区块链电子发票。 - 机动车销售统一发票 - 二手车销售统一发票 - 航空运输电子客票行程单 - 铁路电子客票
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => 'object',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  调用成功时表示调用结果，详情参见[响应参数](https://support.huaweicloud.com/api-ocr/ocr_03_0134.html#ocr_03_0134__table266mcpsimp)。  调用失败时无此字段。 依据发票类型不同，返回参数不同。 - 增值税发票   含增值税专用发票、增值税普通发票、增值税普通发票（卷式）、增值税电子专用发票、增值税电子普通发票、增值税电子普通发票（通行费）、区块链电子发票。 - 机动车销售统一发票 - 二手车销售统一发票 - 航空运输电子客票行程单 - 铁路电子客票
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'xRequestId' => null
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
    * result  调用成功时表示调用结果，详情参见[响应参数](https://support.huaweicloud.com/api-ocr/ocr_03_0134.html#ocr_03_0134__table266mcpsimp)。  调用失败时无此字段。 依据发票类型不同，返回参数不同。 - 增值税发票   含增值税专用发票、增值税普通发票、增值税普通发票（卷式）、增值税电子专用发票、增值税电子普通发票、增值税电子普通发票（通行费）、区块链电子发票。 - 机动车销售统一发票 - 二手车销售统一发票 - 航空运输电子客票行程单 - 铁路电子客票
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  调用成功时表示调用结果，详情参见[响应参数](https://support.huaweicloud.com/api-ocr/ocr_03_0134.html#ocr_03_0134__table266mcpsimp)。  调用失败时无此字段。 依据发票类型不同，返回参数不同。 - 增值税发票   含增值税专用发票、增值税普通发票、增值税普通发票（卷式）、增值税电子专用发票、增值税电子普通发票、增值税电子普通发票（通行费）、区块链电子发票。 - 机动车销售统一发票 - 二手车销售统一发票 - 航空运输电子客票行程单 - 铁路电子客票
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  调用成功时表示调用结果，详情参见[响应参数](https://support.huaweicloud.com/api-ocr/ocr_03_0134.html#ocr_03_0134__table266mcpsimp)。  调用失败时无此字段。 依据发票类型不同，返回参数不同。 - 增值税发票   含增值税专用发票、增值税普通发票、增值税普通发票（卷式）、增值税电子专用发票、增值税电子普通发票、增值税电子普通发票（通行费）、区块链电子发票。 - 机动车销售统一发票 - 二手车销售统一发票 - 航空运输电子客票行程单 - 铁路电子客票
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'xRequestId' => 'getXRequestId'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets result
    *  调用成功时表示调用结果，详情参见[响应参数](https://support.huaweicloud.com/api-ocr/ocr_03_0134.html#ocr_03_0134__table266mcpsimp)。  调用失败时无此字段。 依据发票类型不同，返回参数不同。 - 增值税发票   含增值税专用发票、增值税普通发票、增值税普通发票（卷式）、增值税电子专用发票、增值税电子普通发票、增值税电子普通发票（通行费）、区块链电子发票。 - 机动车销售统一发票 - 二手车销售统一发票 - 航空运输电子客票行程单 - 铁路电子客票
    *
    * @return object|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param object|null $result 调用成功时表示调用结果，详情参见[响应参数](https://support.huaweicloud.com/api-ocr/ocr_03_0134.html#ocr_03_0134__table266mcpsimp)。  调用失败时无此字段。 依据发票类型不同，返回参数不同。 - 增值税发票   含增值税专用发票、增值税普通发票、增值税普通发票（卷式）、增值税电子专用发票、增值税电子普通发票、增值税电子普通发票（通行费）、区块链电子发票。 - 机动车销售统一发票 - 二手车销售统一发票 - 航空运输电子客票行程单 - 铁路电子客票
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

