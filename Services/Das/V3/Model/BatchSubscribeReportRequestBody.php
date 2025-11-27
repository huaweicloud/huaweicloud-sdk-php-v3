<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchSubscribeReportRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchSubscribeReportRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscribe  是否订阅（true-订阅，false-取消订阅）
    * emailTemplateIdList  邮件模板ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscribe' => 'bool',
            'emailTemplateIdList' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscribe  是否订阅（true-订阅，false-取消订阅）
    * emailTemplateIdList  邮件模板ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscribe' => null,
        'emailTemplateIdList' => 'int32'
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
    * subscribe  是否订阅（true-订阅，false-取消订阅）
    * emailTemplateIdList  邮件模板ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscribe' => 'subscribe',
            'emailTemplateIdList' => 'email_template_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscribe  是否订阅（true-订阅，false-取消订阅）
    * emailTemplateIdList  邮件模板ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'subscribe' => 'setSubscribe',
            'emailTemplateIdList' => 'setEmailTemplateIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscribe  是否订阅（true-订阅，false-取消订阅）
    * emailTemplateIdList  邮件模板ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'subscribe' => 'getSubscribe',
            'emailTemplateIdList' => 'getEmailTemplateIdList'
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
        $this->container['subscribe'] = isset($data['subscribe']) ? $data['subscribe'] : null;
        $this->container['emailTemplateIdList'] = isset($data['emailTemplateIdList']) ? $data['emailTemplateIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subscribe'] === null) {
            $invalidProperties[] = "'subscribe' can't be null";
        }
        if ($this->container['emailTemplateIdList'] === null) {
            $invalidProperties[] = "'emailTemplateIdList' can't be null";
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
    * Gets subscribe
    *  是否订阅（true-订阅，false-取消订阅）
    *
    * @return bool
    */
    public function getSubscribe()
    {
        return $this->container['subscribe'];
    }

    /**
    * Sets subscribe
    *
    * @param bool $subscribe 是否订阅（true-订阅，false-取消订阅）
    *
    * @return $this
    */
    public function setSubscribe($subscribe)
    {
        $this->container['subscribe'] = $subscribe;
        return $this;
    }

    /**
    * Gets emailTemplateIdList
    *  邮件模板ID列表
    *
    * @return int[]
    */
    public function getEmailTemplateIdList()
    {
        return $this->container['emailTemplateIdList'];
    }

    /**
    * Sets emailTemplateIdList
    *
    * @param int[] $emailTemplateIdList 邮件模板ID列表
    *
    * @return $this
    */
    public function setEmailTemplateIdList($emailTemplateIdList)
    {
        $this->container['emailTemplateIdList'] = $emailTemplateIdList;
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

