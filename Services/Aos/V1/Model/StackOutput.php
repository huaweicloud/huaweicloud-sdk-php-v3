<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StackOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StackOutput';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  资源栈输出的名称，由用户在模板中定义  以 hcl 模板为例，name 为 vpc_id  ```hcl output \"vpc_id\" {   value = huaweicloud_vpc.my_hello_world_vpc.id } ```  以 json 模板为例，name 为 vpc_id ```json {   \"output\": {     \"vpc_id\": [       {         \"value\": \"${huaweicloud_vpc.my_hello_world_vpc.id}\"       }     ]   } } ```
    * description  资源栈输出的描述，由用户在模板中定义
    * type  资源栈输出的类型
    * value  资源栈输出的值
    * sensitive  标识该资源栈输出是否为敏感信息，由用户在模板中定义  若用户在模板中将该输出定义为sensitive，则返回体中该输出的value和type不会返回真实值，而是返回`<sensitive>`
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'type' => 'string',
            'value' => 'string',
            'sensitive' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  资源栈输出的名称，由用户在模板中定义  以 hcl 模板为例，name 为 vpc_id  ```hcl output \"vpc_id\" {   value = huaweicloud_vpc.my_hello_world_vpc.id } ```  以 json 模板为例，name 为 vpc_id ```json {   \"output\": {     \"vpc_id\": [       {         \"value\": \"${huaweicloud_vpc.my_hello_world_vpc.id}\"       }     ]   } } ```
    * description  资源栈输出的描述，由用户在模板中定义
    * type  资源栈输出的类型
    * value  资源栈输出的值
    * sensitive  标识该资源栈输出是否为敏感信息，由用户在模板中定义  若用户在模板中将该输出定义为sensitive，则返回体中该输出的value和type不会返回真实值，而是返回`<sensitive>`
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'type' => null,
        'value' => null,
        'sensitive' => null
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
    * name  资源栈输出的名称，由用户在模板中定义  以 hcl 模板为例，name 为 vpc_id  ```hcl output \"vpc_id\" {   value = huaweicloud_vpc.my_hello_world_vpc.id } ```  以 json 模板为例，name 为 vpc_id ```json {   \"output\": {     \"vpc_id\": [       {         \"value\": \"${huaweicloud_vpc.my_hello_world_vpc.id}\"       }     ]   } } ```
    * description  资源栈输出的描述，由用户在模板中定义
    * type  资源栈输出的类型
    * value  资源栈输出的值
    * sensitive  标识该资源栈输出是否为敏感信息，由用户在模板中定义  若用户在模板中将该输出定义为sensitive，则返回体中该输出的value和type不会返回真实值，而是返回`<sensitive>`
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'type' => 'type',
            'value' => 'value',
            'sensitive' => 'sensitive'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  资源栈输出的名称，由用户在模板中定义  以 hcl 模板为例，name 为 vpc_id  ```hcl output \"vpc_id\" {   value = huaweicloud_vpc.my_hello_world_vpc.id } ```  以 json 模板为例，name 为 vpc_id ```json {   \"output\": {     \"vpc_id\": [       {         \"value\": \"${huaweicloud_vpc.my_hello_world_vpc.id}\"       }     ]   } } ```
    * description  资源栈输出的描述，由用户在模板中定义
    * type  资源栈输出的类型
    * value  资源栈输出的值
    * sensitive  标识该资源栈输出是否为敏感信息，由用户在模板中定义  若用户在模板中将该输出定义为sensitive，则返回体中该输出的value和type不会返回真实值，而是返回`<sensitive>`
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'type' => 'setType',
            'value' => 'setValue',
            'sensitive' => 'setSensitive'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  资源栈输出的名称，由用户在模板中定义  以 hcl 模板为例，name 为 vpc_id  ```hcl output \"vpc_id\" {   value = huaweicloud_vpc.my_hello_world_vpc.id } ```  以 json 模板为例，name 为 vpc_id ```json {   \"output\": {     \"vpc_id\": [       {         \"value\": \"${huaweicloud_vpc.my_hello_world_vpc.id}\"       }     ]   } } ```
    * description  资源栈输出的描述，由用户在模板中定义
    * type  资源栈输出的类型
    * value  资源栈输出的值
    * sensitive  标识该资源栈输出是否为敏感信息，由用户在模板中定义  若用户在模板中将该输出定义为sensitive，则返回体中该输出的value和type不会返回真实值，而是返回`<sensitive>`
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'type' => 'getType',
            'value' => 'getValue',
            'sensitive' => 'getSensitive'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['sensitive'] = isset($data['sensitive']) ? $data['sensitive'] : null;
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
    * Gets name
    *  资源栈输出的名称，由用户在模板中定义  以 hcl 模板为例，name 为 vpc_id  ```hcl output \"vpc_id\" {   value = huaweicloud_vpc.my_hello_world_vpc.id } ```  以 json 模板为例，name 为 vpc_id ```json {   \"output\": {     \"vpc_id\": [       {         \"value\": \"${huaweicloud_vpc.my_hello_world_vpc.id}\"       }     ]   } } ```
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
    * @param string|null $name 资源栈输出的名称，由用户在模板中定义  以 hcl 模板为例，name 为 vpc_id  ```hcl output \"vpc_id\" {   value = huaweicloud_vpc.my_hello_world_vpc.id } ```  以 json 模板为例，name 为 vpc_id ```json {   \"output\": {     \"vpc_id\": [       {         \"value\": \"${huaweicloud_vpc.my_hello_world_vpc.id}\"       }     ]   } } ```
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  资源栈输出的描述，由用户在模板中定义
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 资源栈输出的描述，由用户在模板中定义
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  资源栈输出的类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 资源栈输出的类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  资源栈输出的值
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
    * @param string|null $value 资源栈输出的值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets sensitive
    *  标识该资源栈输出是否为敏感信息，由用户在模板中定义  若用户在模板中将该输出定义为sensitive，则返回体中该输出的value和type不会返回真实值，而是返回`<sensitive>`
    *
    * @return bool|null
    */
    public function getSensitive()
    {
        return $this->container['sensitive'];
    }

    /**
    * Sets sensitive
    *
    * @param bool|null $sensitive 标识该资源栈输出是否为敏感信息，由用户在模板中定义  若用户在模板中将该输出定义为sensitive，则返回体中该输出的value和type不会返回真实值，而是返回`<sensitive>`
    *
    * @return $this
    */
    public function setSensitive($sensitive)
    {
        $this->container['sensitive'] = $sensitive;
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

