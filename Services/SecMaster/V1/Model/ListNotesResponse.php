<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNotesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNotesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  **参数解释**: 错误码 **取值范围**: 不涉及
    * message  **参数解释**: 错误描述 **取值范围**: 不涉及
    * total  总条数
    * size  分页查询数据大小
    * page  当前页码
    * success  是否请求成功
    * data  评论列表详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'message' => 'string',
            'total' => 'int',
            'size' => 'int',
            'page' => 'int',
            'success' => 'bool',
            'data' => '\HuaweiCloud\SDK\SecMaster\V1\Model\NotesDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  **参数解释**: 错误码 **取值范围**: 不涉及
    * message  **参数解释**: 错误描述 **取值范围**: 不涉及
    * total  总条数
    * size  分页查询数据大小
    * page  当前页码
    * success  是否请求成功
    * data  评论列表详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'message' => null,
        'total' => null,
        'size' => null,
        'page' => null,
        'success' => null,
        'data' => null
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
    * code  **参数解释**: 错误码 **取值范围**: 不涉及
    * message  **参数解释**: 错误描述 **取值范围**: 不涉及
    * total  总条数
    * size  分页查询数据大小
    * page  当前页码
    * success  是否请求成功
    * data  评论列表详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'message' => 'message',
            'total' => 'total',
            'size' => 'size',
            'page' => 'page',
            'success' => 'success',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  **参数解释**: 错误码 **取值范围**: 不涉及
    * message  **参数解释**: 错误描述 **取值范围**: 不涉及
    * total  总条数
    * size  分页查询数据大小
    * page  当前页码
    * success  是否请求成功
    * data  评论列表详情
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'message' => 'setMessage',
            'total' => 'setTotal',
            'size' => 'setSize',
            'page' => 'setPage',
            'success' => 'setSuccess',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  **参数解释**: 错误码 **取值范围**: 不涉及
    * message  **参数解释**: 错误描述 **取值范围**: 不涉及
    * total  总条数
    * size  分页查询数据大小
    * page  当前页码
    * success  是否请求成功
    * data  评论列表详情
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'message' => 'getMessage',
            'total' => 'getTotal',
            'size' => 'getSize',
            'page' => 'getPage',
            'success' => 'getSuccess',
            'data' => 'getData'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 1024)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 0)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 1024)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 0)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] > 99999)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 1000)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['page']) && ($this->container['page'] > 1000)) {
                $invalidProperties[] = "invalid value for 'page', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['page']) && ($this->container['page'] < 0)) {
                $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 0.";
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
    *  **参数解释**: 错误码 **取值范围**: 不涉及
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
    * @param string|null $code **参数解释**: 错误码 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释**: 错误描述 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释**: 错误描述 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets total
    *  总条数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总条数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets size
    *  分页查询数据大小
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 分页查询数据大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets page
    *  当前页码
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page 当前页码
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets success
    *  是否请求成功
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success 是否请求成功
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets data
    *  评论列表详情
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\NotesDetail[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\NotesDetail[]|null $data 评论列表详情
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

