<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePoolSessionPersistenceOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePoolSessionPersistenceOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cookieName  cookie名称。  [共享型LB，支持字母、数字、中划线(-)和下划线(_)，最大长度64个字符。 独享型LB，支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm) [支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws_eu,hcso_dt) 使用说明： - 只有当type为APP_COOKIE时才有效。其他情况下传该字段会报错。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    * type  会话保持类型。  取值范围：SOURCE_IP、HTTP_COOKIE、APP_COOKIE。  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type可以为HTTP_COOKIE和APP_COOKIE，其他取值会话保持失效。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type只能为HTTP_COOKIE， 其他取值会话保持失效。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    * persistenceTimeout  会话保持的时间。当type为APP_COOKIE时不生效。  适用范围：如果pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1； 如果pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cookieName' => 'string',
            'type' => 'string',
            'persistenceTimeout' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cookieName  cookie名称。  [共享型LB，支持字母、数字、中划线(-)和下划线(_)，最大长度64个字符。 独享型LB，支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm) [支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws_eu,hcso_dt) 使用说明： - 只有当type为APP_COOKIE时才有效。其他情况下传该字段会报错。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    * type  会话保持类型。  取值范围：SOURCE_IP、HTTP_COOKIE、APP_COOKIE。  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type可以为HTTP_COOKIE和APP_COOKIE，其他取值会话保持失效。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type只能为HTTP_COOKIE， 其他取值会话保持失效。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    * persistenceTimeout  会话保持的时间。当type为APP_COOKIE时不生效。  适用范围：如果pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1； 如果pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cookieName' => null,
        'type' => null,
        'persistenceTimeout' => 'int32'
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
    * cookieName  cookie名称。  [共享型LB，支持字母、数字、中划线(-)和下划线(_)，最大长度64个字符。 独享型LB，支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm) [支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws_eu,hcso_dt) 使用说明： - 只有当type为APP_COOKIE时才有效。其他情况下传该字段会报错。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    * type  会话保持类型。  取值范围：SOURCE_IP、HTTP_COOKIE、APP_COOKIE。  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type可以为HTTP_COOKIE和APP_COOKIE，其他取值会话保持失效。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type只能为HTTP_COOKIE， 其他取值会话保持失效。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    * persistenceTimeout  会话保持的时间。当type为APP_COOKIE时不生效。  适用范围：如果pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1； 如果pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cookieName' => 'cookie_name',
            'type' => 'type',
            'persistenceTimeout' => 'persistence_timeout'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cookieName  cookie名称。  [共享型LB，支持字母、数字、中划线(-)和下划线(_)，最大长度64个字符。 独享型LB，支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm) [支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws_eu,hcso_dt) 使用说明： - 只有当type为APP_COOKIE时才有效。其他情况下传该字段会报错。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    * type  会话保持类型。  取值范围：SOURCE_IP、HTTP_COOKIE、APP_COOKIE。  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type可以为HTTP_COOKIE和APP_COOKIE，其他取值会话保持失效。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type只能为HTTP_COOKIE， 其他取值会话保持失效。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    * persistenceTimeout  会话保持的时间。当type为APP_COOKIE时不生效。  适用范围：如果pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1； 如果pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $setters = [
            'cookieName' => 'setCookieName',
            'type' => 'setType',
            'persistenceTimeout' => 'setPersistenceTimeout'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cookieName  cookie名称。  [共享型LB，支持字母、数字、中划线(-)和下划线(_)，最大长度64个字符。 独享型LB，支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm) [支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws_eu,hcso_dt) 使用说明： - 只有当type为APP_COOKIE时才有效。其他情况下传该字段会报错。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    * type  会话保持类型。  取值范围：SOURCE_IP、HTTP_COOKIE、APP_COOKIE。  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type可以为HTTP_COOKIE和APP_COOKIE，其他取值会话保持失效。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type只能为HTTP_COOKIE， 其他取值会话保持失效。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    * persistenceTimeout  会话保持的时间。当type为APP_COOKIE时不生效。  适用范围：如果pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1； 如果pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $getters = [
            'cookieName' => 'getCookieName',
            'type' => 'getType',
            'persistenceTimeout' => 'getPersistenceTimeout'
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
    const TYPE_SOURCE_IP = 'SOURCE_IP';
    const TYPE_HTTP_COOKIE = 'HTTP_COOKIE';
    const TYPE_APP_COOKIE = 'APP_COOKIE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SOURCE_IP,
            self::TYPE_HTTP_COOKIE,
            self::TYPE_APP_COOKIE,
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
        $this->container['cookieName'] = isset($data['cookieName']) ? $data['cookieName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['persistenceTimeout'] = isset($data['persistenceTimeout']) ? $data['persistenceTimeout'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cookieName']) && !preg_match("/[a-zA-Z0-9-_.]*/", $this->container['cookieName'])) {
                $invalidProperties[] = "invalid value for 'cookieName', must be conform to the pattern /[a-zA-Z0-9-_.]*/.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets cookieName
    *  cookie名称。  [共享型LB，支持字母、数字、中划线(-)和下划线(_)，最大长度64个字符。 独享型LB，支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm) [支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws_eu,hcso_dt) 使用说明： - 只有当type为APP_COOKIE时才有效。其他情况下传该字段会报错。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    *
    * @return string|null
    */
    public function getCookieName()
    {
        return $this->container['cookieName'];
    }

    /**
    * Sets cookieName
    *
    * @param string|null $cookieName cookie名称。  [共享型LB，支持字母、数字、中划线(-)和下划线(_)，最大长度64个字符。 独享型LB，支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt,hk_tm) [支持字母、数字、中划线(-)、下划线(_)和点号(.)，最大长度255个字符。](tag:hws_eu,hcso_dt) 使用说明： - 只有当type为APP_COOKIE时才有效。其他情况下传该字段会报错。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    *
    * @return $this
    */
    public function setCookieName($cookieName)
    {
        $this->container['cookieName'] = $cookieName;
        return $this;
    }

    /**
    * Gets type
    *  会话保持类型。  取值范围：SOURCE_IP、HTTP_COOKIE、APP_COOKIE。  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type可以为HTTP_COOKIE和APP_COOKIE，其他取值会话保持失效。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type只能为HTTP_COOKIE， 其他取值会话保持失效。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
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
    * @param string|null $type 会话保持类型。  取值范围：SOURCE_IP、HTTP_COOKIE、APP_COOKIE。  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type可以为HTTP_COOKIE和APP_COOKIE，其他取值会话保持失效。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)  [使用说明： - 当pool的protocol为TCP、UDP，无论type取值如何，都会被忽略，会话保持只按SOURCE_IP生效。 - 当pool的protocol为HTTP、HTTPS时。type只能为HTTP_COOKIE， 其他取值会话保持失效。](tag:hws_eu,hcso_dt)  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets persistenceTimeout
    *  会话保持的时间。当type为APP_COOKIE时不生效。  适用范围：如果pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1； 如果pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    *
    * @return int|null
    */
    public function getPersistenceTimeout()
    {
        return $this->container['persistenceTimeout'];
    }

    /**
    * Sets persistenceTimeout
    *
    * @param int|null $persistenceTimeout 会话保持的时间。当type为APP_COOKIE时不生效。  适用范围：如果pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1； 如果pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setPersistenceTimeout($persistenceTimeout)
    {
        $this->container['persistenceTimeout'] = $persistenceTimeout;
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

