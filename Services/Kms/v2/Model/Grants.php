<?php

namespace HuaweiCloud\SDK\Kms\v2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Grants implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Grants';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID。
    * grantId  授权ID，64字节。
    * granteePrincipal  被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * granteePrincipalType  授权类型。 有效值：“user”，“domain”。
    * operations  授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。
    * issuingPrincipal  创建授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * creationDate  创建时间，时间戳，即从1970年1月1日至该时间的总秒数。 例如：1497341531000
    * name  授权名字，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
    * retiringPrincipal  可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'grantId' => 'string',
            'granteePrincipal' => 'string',
            'granteePrincipalType' => 'string',
            'operations' => 'string[]',
            'issuingPrincipal' => 'string',
            'creationDate' => 'string',
            'name' => 'string',
            'retiringPrincipal' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID。
    * grantId  授权ID，64字节。
    * granteePrincipal  被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * granteePrincipalType  授权类型。 有效值：“user”，“domain”。
    * operations  授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。
    * issuingPrincipal  创建授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * creationDate  创建时间，时间戳，即从1970年1月1日至该时间的总秒数。 例如：1497341531000
    * name  授权名字，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
    * retiringPrincipal  可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'grantId' => null,
        'granteePrincipal' => null,
        'granteePrincipalType' => null,
        'operations' => null,
        'issuingPrincipal' => null,
        'creationDate' => null,
        'name' => null,
        'retiringPrincipal' => null
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
    * keyId  密钥ID。
    * grantId  授权ID，64字节。
    * granteePrincipal  被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * granteePrincipalType  授权类型。 有效值：“user”，“domain”。
    * operations  授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。
    * issuingPrincipal  创建授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * creationDate  创建时间，时间戳，即从1970年1月1日至该时间的总秒数。 例如：1497341531000
    * name  授权名字，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
    * retiringPrincipal  可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'grantId' => 'grant_id',
            'granteePrincipal' => 'grantee_principal',
            'granteePrincipalType' => 'grantee_principal_type',
            'operations' => 'operations',
            'issuingPrincipal' => 'issuing_principal',
            'creationDate' => 'creation_date',
            'name' => 'name',
            'retiringPrincipal' => 'retiring_principal'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID。
    * grantId  授权ID，64字节。
    * granteePrincipal  被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * granteePrincipalType  授权类型。 有效值：“user”，“domain”。
    * operations  授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。
    * issuingPrincipal  创建授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * creationDate  创建时间，时间戳，即从1970年1月1日至该时间的总秒数。 例如：1497341531000
    * name  授权名字，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
    * retiringPrincipal  可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'grantId' => 'setGrantId',
            'granteePrincipal' => 'setGranteePrincipal',
            'granteePrincipalType' => 'setGranteePrincipalType',
            'operations' => 'setOperations',
            'issuingPrincipal' => 'setIssuingPrincipal',
            'creationDate' => 'setCreationDate',
            'name' => 'setName',
            'retiringPrincipal' => 'setRetiringPrincipal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID。
    * grantId  授权ID，64字节。
    * granteePrincipal  被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * granteePrincipalType  授权类型。 有效值：“user”，“domain”。
    * operations  授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。
    * issuingPrincipal  创建授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    * creationDate  创建时间，时间戳，即从1970年1月1日至该时间的总秒数。 例如：1497341531000
    * name  授权名字，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
    * retiringPrincipal  可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'grantId' => 'getGrantId',
            'granteePrincipal' => 'getGranteePrincipal',
            'granteePrincipalType' => 'getGranteePrincipalType',
            'operations' => 'getOperations',
            'issuingPrincipal' => 'getIssuingPrincipal',
            'creationDate' => 'getCreationDate',
            'name' => 'getName',
            'retiringPrincipal' => 'getRetiringPrincipal'
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
    const GRANTEE_PRINCIPAL_TYPE_USER = 'user';
    const GRANTEE_PRINCIPAL_TYPE_DOMAIN = 'domain';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGranteePrincipalTypeAllowableValues()
    {
        return [
            self::GRANTEE_PRINCIPAL_TYPE_USER,
            self::GRANTEE_PRINCIPAL_TYPE_DOMAIN,
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['grantId'] = isset($data['grantId']) ? $data['grantId'] : null;
        $this->container['granteePrincipal'] = isset($data['granteePrincipal']) ? $data['granteePrincipal'] : null;
        $this->container['granteePrincipalType'] = isset($data['granteePrincipalType']) ? $data['granteePrincipalType'] : null;
        $this->container['operations'] = isset($data['operations']) ? $data['operations'] : null;
        $this->container['issuingPrincipal'] = isset($data['issuingPrincipal']) ? $data['issuingPrincipal'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['retiringPrincipal'] = isset($data['retiringPrincipal']) ? $data['retiringPrincipal'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['grantId']) && (mb_strlen($this->container['grantId']) > 64)) {
                $invalidProperties[] = "invalid value for 'grantId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['grantId']) && (mb_strlen($this->container['grantId']) < 64)) {
                $invalidProperties[] = "invalid value for 'grantId', the character length must be bigger than or equal to 64.";
            }
            if (!is_null($this->container['granteePrincipal']) && (mb_strlen($this->container['granteePrincipal']) > 64)) {
                $invalidProperties[] = "invalid value for 'granteePrincipal', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['granteePrincipal']) && (mb_strlen($this->container['granteePrincipal']) < 1)) {
                $invalidProperties[] = "invalid value for 'granteePrincipal', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getGranteePrincipalTypeAllowableValues();
                if (!is_null($this->container['granteePrincipalType']) && !in_array($this->container['granteePrincipalType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'granteePrincipalType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['issuingPrincipal']) && (mb_strlen($this->container['issuingPrincipal']) > 64)) {
                $invalidProperties[] = "invalid value for 'issuingPrincipal', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['issuingPrincipal']) && (mb_strlen($this->container['issuingPrincipal']) < 1)) {
                $invalidProperties[] = "invalid value for 'issuingPrincipal', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creationDate']) && (mb_strlen($this->container['creationDate']) > 13)) {
                $invalidProperties[] = "invalid value for 'creationDate', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['creationDate']) && (mb_strlen($this->container['creationDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'creationDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['retiringPrincipal']) && (mb_strlen($this->container['retiringPrincipal']) > 64)) {
                $invalidProperties[] = "invalid value for 'retiringPrincipal', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['retiringPrincipal']) && (mb_strlen($this->container['retiringPrincipal']) < 1)) {
                $invalidProperties[] = "invalid value for 'retiringPrincipal', the character length must be bigger than or equal to 1.";
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
    * Gets keyId
    *  密钥ID。
    *
    * @return string|null
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string|null $keyId 密钥ID。
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets grantId
    *  授权ID，64字节。
    *
    * @return string|null
    */
    public function getGrantId()
    {
        return $this->container['grantId'];
    }

    /**
    * Sets grantId
    *
    * @param string|null $grantId 授权ID，64字节。
    *
    * @return $this
    */
    public function setGrantId($grantId)
    {
        $this->container['grantId'] = $grantId;
        return $this;
    }

    /**
    * Gets granteePrincipal
    *  被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @return string|null
    */
    public function getGranteePrincipal()
    {
        return $this->container['granteePrincipal'];
    }

    /**
    * Sets granteePrincipal
    *
    * @param string|null $granteePrincipal 被授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @return $this
    */
    public function setGranteePrincipal($granteePrincipal)
    {
        $this->container['granteePrincipal'] = $granteePrincipal;
        return $this;
    }

    /**
    * Gets granteePrincipalType
    *  授权类型。 有效值：“user”，“domain”。
    *
    * @return string|null
    */
    public function getGranteePrincipalType()
    {
        return $this->container['granteePrincipalType'];
    }

    /**
    * Sets granteePrincipalType
    *
    * @param string|null $granteePrincipalType 授权类型。 有效值：“user”，“domain”。
    *
    * @return $this
    */
    public function setGranteePrincipalType($granteePrincipalType)
    {
        $this->container['granteePrincipalType'] = $granteePrincipalType;
        return $this;
    }

    /**
    * Gets operations
    *  授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。
    *
    * @return string[]|null
    */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
    * Sets operations
    *
    * @param string[]|null $operations 授权允许的操作列表。 有效的值：“create-datakey”，“create-datakey-without-plaintext”，“encrypt-datakey”，“decrypt-datakey”，“describe-key”，“create-grant”，“retire-grant”，“encrypt-data”，“decrypt-data”。 有效值不能仅为“create-grant”。
    *
    * @return $this
    */
    public function setOperations($operations)
    {
        $this->container['operations'] = $operations;
        return $this;
    }

    /**
    * Gets issuingPrincipal
    *  创建授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @return string|null
    */
    public function getIssuingPrincipal()
    {
        return $this->container['issuingPrincipal'];
    }

    /**
    * Sets issuingPrincipal
    *
    * @param string|null $issuingPrincipal 创建授权用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @return $this
    */
    public function setIssuingPrincipal($issuingPrincipal)
    {
        $this->container['issuingPrincipal'] = $issuingPrincipal;
        return $this;
    }

    /**
    * Gets creationDate
    *  创建时间，时间戳，即从1970年1月1日至该时间的总秒数。 例如：1497341531000
    *
    * @return string|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param string|null $creationDate 创建时间，时间戳，即从1970年1月1日至该时间的总秒数。 例如：1497341531000
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
        return $this;
    }

    /**
    * Gets name
    *  授权名字，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
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
    * @param string|null $name 授权名字，取值1到255字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets retiringPrincipal
    *  可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @return string|null
    */
    public function getRetiringPrincipal()
    {
        return $this->container['retiringPrincipal'];
    }

    /**
    * Sets retiringPrincipal
    *
    * @param string|null $retiringPrincipal 可退役授权的用户ID，1~64字节，满足正则匹配“^[a-zA-Z0-9]{1，64}$”。 例如：0d0466b00d0466b00d0466b00d0466b0
    *
    * @return $this
    */
    public function setRetiringPrincipal($retiringPrincipal)
    {
        $this->container['retiringPrincipal'] = $retiringPrincipal;
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

