<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAttachmentResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAttachmentResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  业务code，0 代表业务成功，其他数值代表有错误，详情请见错误码。
    * providerCode  服务编码。
    * msg  错误信息，code为0，此值为空；code不为0，此处为具体的错误描述。
    * data  data
    * name  **参数解释：** 附件文件名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * id  **参数解释：** 附件唯一id。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'providerCode' => 'string',
            'msg' => 'string',
            'data' => '\HuaweiCloud\SDK\Coc\V1\Model\ExternalAttachment',
            'name' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  业务code，0 代表业务成功，其他数值代表有错误，详情请见错误码。
    * providerCode  服务编码。
    * msg  错误信息，code为0，此值为空；code不为0，此处为具体的错误描述。
    * data  data
    * name  **参数解释：** 附件文件名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * id  **参数解释：** 附件唯一id。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'providerCode' => null,
        'msg' => null,
        'data' => null,
        'name' => null,
        'id' => null
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
    * code  业务code，0 代表业务成功，其他数值代表有错误，详情请见错误码。
    * providerCode  服务编码。
    * msg  错误信息，code为0，此值为空；code不为0，此处为具体的错误描述。
    * data  data
    * name  **参数解释：** 附件文件名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * id  **参数解释：** 附件唯一id。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'providerCode' => 'provider_code',
            'msg' => 'msg',
            'data' => 'data',
            'name' => 'name',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  业务code，0 代表业务成功，其他数值代表有错误，详情请见错误码。
    * providerCode  服务编码。
    * msg  错误信息，code为0，此值为空；code不为0，此处为具体的错误描述。
    * data  data
    * name  **参数解释：** 附件文件名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * id  **参数解释：** 附件唯一id。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'providerCode' => 'setProviderCode',
            'msg' => 'setMsg',
            'data' => 'setData',
            'name' => 'setName',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  业务code，0 代表业务成功，其他数值代表有错误，详情请见错误码。
    * providerCode  服务编码。
    * msg  错误信息，code为0，此值为空；code不为0，此处为具体的错误描述。
    * data  data
    * name  **参数解释：** 附件文件名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * id  **参数解释：** 附件唯一id。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'providerCode' => 'getProviderCode',
            'msg' => 'getMsg',
            'data' => 'getData',
            'name' => 'getName',
            'id' => 'getId'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['providerCode'] = isset($data['providerCode']) ? $data['providerCode'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 10)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 0)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['providerCode']) && (mb_strlen($this->container['providerCode']) > 255)) {
                $invalidProperties[] = "invalid value for 'providerCode', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['providerCode']) && (mb_strlen($this->container['providerCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'providerCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['msg']) && (mb_strlen($this->container['msg']) > 1024)) {
                $invalidProperties[] = "invalid value for 'msg', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['msg']) && (mb_strlen($this->container['msg']) < 0)) {
                $invalidProperties[] = "invalid value for 'msg', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
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
    * Gets code
    *  业务code，0 代表业务成功，其他数值代表有错误，详情请见错误码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 业务code，0 代表业务成功，其他数值代表有错误，详情请见错误码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets providerCode
    *  服务编码。
    *
    * @return string|null
    */
    public function getProviderCode()
    {
        return $this->container['providerCode'];
    }

    /**
    * Sets providerCode
    *
    * @param string|null $providerCode 服务编码。
    *
    * @return $this
    */
    public function setProviderCode($providerCode)
    {
        $this->container['providerCode'] = $providerCode;
        return $this;
    }

    /**
    * Gets msg
    *  错误信息，code为0，此值为空；code不为0，此处为具体的错误描述。
    *
    * @return string|null
    */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
    * Sets msg
    *
    * @param string|null $msg 错误信息，code为0，此值为空；code不为0，此处为具体的错误描述。
    *
    * @return $this
    */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;
        return $this;
    }

    /**
    * Gets data
    *  data
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ExternalAttachment|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ExternalAttachment|null $data data
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 附件文件名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 附件文件名。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 附件唯一id。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：** 附件唯一id。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

