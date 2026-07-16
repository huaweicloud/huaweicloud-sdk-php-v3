<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInferServiceClusterRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInferServiceClusterRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * xUserToken  **参数解释：** 用户Token。[通过调用IAM服务获取用户Token接口获取响应消息头中X-Subject-Token的值。](tag:hws,hws_hk)获取方法请参见[[获取IAM用户Token（使用密码）](modelarts_03_0004.xml)](tag:hws,hws_hk)[[获取Token](modelarts_03_0015.xml)](tag:hcs,hcs_sm)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'xUserToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * xUserToken  **参数解释：** 用户Token。[通过调用IAM服务获取用户Token接口获取响应消息头中X-Subject-Token的值。](tag:hws,hws_hk)获取方法请参见[[获取IAM用户Token（使用密码）](modelarts_03_0004.xml)](tag:hws,hws_hk)[[获取Token](modelarts_03_0015.xml)](tag:hcs,hcs_sm)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'xUserToken' => null
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
    * id  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * xUserToken  **参数解释：** 用户Token。[通过调用IAM服务获取用户Token接口获取响应消息头中X-Subject-Token的值。](tag:hws,hws_hk)获取方法请参见[[获取IAM用户Token（使用密码）](modelarts_03_0004.xml)](tag:hws,hws_hk)[[获取Token](modelarts_03_0015.xml)](tag:hcs,hcs_sm)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'xUserToken' => 'X-User-Token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * xUserToken  **参数解释：** 用户Token。[通过调用IAM服务获取用户Token接口获取响应消息头中X-Subject-Token的值。](tag:hws,hws_hk)获取方法请参见[[获取IAM用户Token（使用密码）](modelarts_03_0004.xml)](tag:hws,hws_hk)[[获取Token](modelarts_03_0015.xml)](tag:hcs,hcs_sm)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'xUserToken' => 'setXUserToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * xUserToken  **参数解释：** 用户Token。[通过调用IAM服务获取用户Token接口获取响应消息头中X-Subject-Token的值。](tag:hws,hws_hk)获取方法请参见[[获取IAM用户Token（使用密码）](modelarts_03_0004.xml)](tag:hws,hws_hk)[[获取Token](modelarts_03_0015.xml)](tag:hcs,hcs_sm)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'xUserToken' => 'getXUserToken'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['xUserToken'] = isset($data['xUserToken']) ? $data['xUserToken'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
    * Gets id
    *  **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释：** 资源池ID，查询指定资源池下的服务，默认不过滤。可通过[查询资源池列表](ShowPool.xml)获取。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets xUserToken
    *  **参数解释：** 用户Token。[通过调用IAM服务获取用户Token接口获取响应消息头中X-Subject-Token的值。](tag:hws,hws_hk)获取方法请参见[[获取IAM用户Token（使用密码）](modelarts_03_0004.xml)](tag:hws,hws_hk)[[获取Token](modelarts_03_0015.xml)](tag:hcs,hcs_sm)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getXUserToken()
    {
        return $this->container['xUserToken'];
    }

    /**
    * Sets xUserToken
    *
    * @param string|null $xUserToken **参数解释：** 用户Token。[通过调用IAM服务获取用户Token接口获取响应消息头中X-Subject-Token的值。](tag:hws,hws_hk)获取方法请参见[[获取IAM用户Token（使用密码）](modelarts_03_0004.xml)](tag:hws,hws_hk)[[获取Token](modelarts_03_0015.xml)](tag:hcs,hcs_sm)。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setXUserToken($xUserToken)
    {
        $this->container['xUserToken'] = $xUserToken;
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

