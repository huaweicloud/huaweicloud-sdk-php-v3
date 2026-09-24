<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BulkCreateAndDeleteTags implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BulkCreateAndDeleteTags';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  键。 key最大长度为36个字符。 key不能为空字符串。 key前后空格会被丢弃。 key不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [key只能由中文，字母，数字，“-”，“_”组成。](tag:hws,hws_hk,fcs_vm,ctc)   [key只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm) 创建时如果请求体中存在重复key则报错。 创建时，不允许重复key，如果数据库存在就覆盖。 删除时，允许重复key。 删除时，如果删除的标签不存在，默认处理成功,删除时不对标签字符集范围做校验。 删除时tags结构体不能缺失，key不能为空，或者空字符串。
    * value  值。 添加标签时value值必选，删除标签时value值可选。 value最大长度为43个字符。 value可以为空字符串。 value前后的空格会被丢弃。 value不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [value只能由中文，字母，数字，“-”，“_”，“.”组成。](tag:hws,hws_hk,fcs_vm,ctc) [value只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  键。 key最大长度为36个字符。 key不能为空字符串。 key前后空格会被丢弃。 key不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [key只能由中文，字母，数字，“-”，“_”组成。](tag:hws,hws_hk,fcs_vm,ctc)   [key只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm) 创建时如果请求体中存在重复key则报错。 创建时，不允许重复key，如果数据库存在就覆盖。 删除时，允许重复key。 删除时，如果删除的标签不存在，默认处理成功,删除时不对标签字符集范围做校验。 删除时tags结构体不能缺失，key不能为空，或者空字符串。
    * value  值。 添加标签时value值必选，删除标签时value值可选。 value最大长度为43个字符。 value可以为空字符串。 value前后的空格会被丢弃。 value不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [value只能由中文，字母，数字，“-”，“_”，“.”组成。](tag:hws,hws_hk,fcs_vm,ctc) [value只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'value' => null
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
    * key  键。 key最大长度为36个字符。 key不能为空字符串。 key前后空格会被丢弃。 key不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [key只能由中文，字母，数字，“-”，“_”组成。](tag:hws,hws_hk,fcs_vm,ctc)   [key只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm) 创建时如果请求体中存在重复key则报错。 创建时，不允许重复key，如果数据库存在就覆盖。 删除时，允许重复key。 删除时，如果删除的标签不存在，默认处理成功,删除时不对标签字符集范围做校验。 删除时tags结构体不能缺失，key不能为空，或者空字符串。
    * value  值。 添加标签时value值必选，删除标签时value值可选。 value最大长度为43个字符。 value可以为空字符串。 value前后的空格会被丢弃。 value不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [value只能由中文，字母，数字，“-”，“_”，“.”组成。](tag:hws,hws_hk,fcs_vm,ctc) [value只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  键。 key最大长度为36个字符。 key不能为空字符串。 key前后空格会被丢弃。 key不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [key只能由中文，字母，数字，“-”，“_”组成。](tag:hws,hws_hk,fcs_vm,ctc)   [key只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm) 创建时如果请求体中存在重复key则报错。 创建时，不允许重复key，如果数据库存在就覆盖。 删除时，允许重复key。 删除时，如果删除的标签不存在，默认处理成功,删除时不对标签字符集范围做校验。 删除时tags结构体不能缺失，key不能为空，或者空字符串。
    * value  值。 添加标签时value值必选，删除标签时value值可选。 value最大长度为43个字符。 value可以为空字符串。 value前后的空格会被丢弃。 value不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [value只能由中文，字母，数字，“-”，“_”，“.”组成。](tag:hws,hws_hk,fcs_vm,ctc) [value只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm)
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  键。 key最大长度为36个字符。 key不能为空字符串。 key前后空格会被丢弃。 key不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [key只能由中文，字母，数字，“-”，“_”组成。](tag:hws,hws_hk,fcs_vm,ctc)   [key只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm) 创建时如果请求体中存在重复key则报错。 创建时，不允许重复key，如果数据库存在就覆盖。 删除时，允许重复key。 删除时，如果删除的标签不存在，默认处理成功,删除时不对标签字符集范围做校验。 删除时tags结构体不能缺失，key不能为空，或者空字符串。
    * value  值。 添加标签时value值必选，删除标签时value值可选。 value最大长度为43个字符。 value可以为空字符串。 value前后的空格会被丢弃。 value不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [value只能由中文，字母，数字，“-”，“_”，“.”组成。](tag:hws,hws_hk,fcs_vm,ctc) [value只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm)
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'value' => 'getValue'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
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
    * Gets key
    *  键。 key最大长度为36个字符。 key不能为空字符串。 key前后空格会被丢弃。 key不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [key只能由中文，字母，数字，“-”，“_”组成。](tag:hws,hws_hk,fcs_vm,ctc)   [key只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm) 创建时如果请求体中存在重复key则报错。 创建时，不允许重复key，如果数据库存在就覆盖。 删除时，允许重复key。 删除时，如果删除的标签不存在，默认处理成功,删除时不对标签字符集范围做校验。 删除时tags结构体不能缺失，key不能为空，或者空字符串。
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 键。 key最大长度为36个字符。 key不能为空字符串。 key前后空格会被丢弃。 key不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [key只能由中文，字母，数字，“-”，“_”组成。](tag:hws,hws_hk,fcs_vm,ctc)   [key只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm) 创建时如果请求体中存在重复key则报错。 创建时，不允许重复key，如果数据库存在就覆盖。 删除时，允许重复key。 删除时，如果删除的标签不存在，默认处理成功,删除时不对标签字符集范围做校验。 删除时tags结构体不能缺失，key不能为空，或者空字符串。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  值。 添加标签时value值必选，删除标签时value值可选。 value最大长度为43个字符。 value可以为空字符串。 value前后的空格会被丢弃。 value不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [value只能由中文，字母，数字，“-”，“_”，“.”组成。](tag:hws,hws_hk,fcs_vm,ctc) [value只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm)
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 值。 添加标签时value值必选，删除标签时value值可选。 value最大长度为43个字符。 value可以为空字符串。 value前后的空格会被丢弃。 value不能包含非打印字符ASCII(0-31)，“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。 [value只能由中文，字母，数字，“-”，“_”，“.”组成。](tag:hws,hws_hk,fcs_vm,ctc) [value只能由字母，数字，“_”，“-”组成。](tag:dt,ocb,tlf,sbc,g42,hcso_dt,tm)
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

