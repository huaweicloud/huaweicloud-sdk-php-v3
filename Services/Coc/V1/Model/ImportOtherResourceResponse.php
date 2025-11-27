<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportOtherResourceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportOtherResourceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * success  **参数解释：** 成功数即excel表中数据通过校验成功的数据条数。 **取值范围：** 不涉及。
    * total  **参数解释：** 总条数即excel表中数据的总数据条数。 **取值范围：** 不涉及。
    * errorList  **参数解释：** 失败信息集合即excel表格中校验失败报错信息组合。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'success' => 'int',
            'total' => 'int',
            'errorList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * success  **参数解释：** 成功数即excel表中数据通过校验成功的数据条数。 **取值范围：** 不涉及。
    * total  **参数解释：** 总条数即excel表中数据的总数据条数。 **取值范围：** 不涉及。
    * errorList  **参数解释：** 失败信息集合即excel表格中校验失败报错信息组合。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'success' => 'int32',
        'total' => 'int32',
        'errorList' => null
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
    * success  **参数解释：** 成功数即excel表中数据通过校验成功的数据条数。 **取值范围：** 不涉及。
    * total  **参数解释：** 总条数即excel表中数据的总数据条数。 **取值范围：** 不涉及。
    * errorList  **参数解释：** 失败信息集合即excel表格中校验失败报错信息组合。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'success' => 'success',
            'total' => 'total',
            'errorList' => 'error_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * success  **参数解释：** 成功数即excel表中数据通过校验成功的数据条数。 **取值范围：** 不涉及。
    * total  **参数解释：** 总条数即excel表中数据的总数据条数。 **取值范围：** 不涉及。
    * errorList  **参数解释：** 失败信息集合即excel表格中校验失败报错信息组合。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'success' => 'setSuccess',
            'total' => 'setTotal',
            'errorList' => 'setErrorList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * success  **参数解释：** 成功数即excel表中数据通过校验成功的数据条数。 **取值范围：** 不涉及。
    * total  **参数解释：** 总条数即excel表中数据的总数据条数。 **取值范围：** 不涉及。
    * errorList  **参数解释：** 失败信息集合即excel表格中校验失败报错信息组合。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'success' => 'getSuccess',
            'total' => 'getTotal',
            'errorList' => 'getErrorList'
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
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['errorList'] = isset($data['errorList']) ? $data['errorList'] : null;
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
    * Gets success
    *  **参数解释：** 成功数即excel表中数据通过校验成功的数据条数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param int|null $success **参数解释：** 成功数即excel表中数据通过校验成功的数据条数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释：** 总条数即excel表中数据的总数据条数。 **取值范围：** 不涉及。
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
    * @param int|null $total **参数解释：** 总条数即excel表中数据的总数据条数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets errorList
    *  **参数解释：** 失败信息集合即excel表格中校验失败报错信息组合。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getErrorList()
    {
        return $this->container['errorList'];
    }

    /**
    * Sets errorList
    *
    * @param string[]|null $errorList **参数解释：** 失败信息集合即excel表格中校验失败报错信息组合。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setErrorList($errorList)
    {
        $this->container['errorList'] = $errorList;
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

