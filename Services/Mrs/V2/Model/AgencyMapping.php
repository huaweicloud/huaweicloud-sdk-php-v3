<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgencyMapping implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgencyMapping';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agency  该映射绑定的IAM委托名称。
    * identifierType  委托类型，分为“User”和“Group”两种。 - User表示该映射关系为针对用户的映射，identifiers中填写用户名称列表。 - Group表示该映射关系为针对用户组的映射，identifiers中填写用户组名称列表。
    * identifiers  IAM委托映射的用户（组）名称列表。请前往IAM，单击“用户（组）”按钮，获取用户（组）名称列表。
    * agencyId  该映射关系绑定的委托的的唯一标识码。请前往IAM，单击“委托”按钮，进入委托页面，将鼠标放置委托名称上，在弹窗中获取委托唯一标识码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agency' => 'string',
            'identifierType' => 'string',
            'identifiers' => 'string[]',
            'agencyId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agency  该映射绑定的IAM委托名称。
    * identifierType  委托类型，分为“User”和“Group”两种。 - User表示该映射关系为针对用户的映射，identifiers中填写用户名称列表。 - Group表示该映射关系为针对用户组的映射，identifiers中填写用户组名称列表。
    * identifiers  IAM委托映射的用户（组）名称列表。请前往IAM，单击“用户（组）”按钮，获取用户（组）名称列表。
    * agencyId  该映射关系绑定的委托的的唯一标识码。请前往IAM，单击“委托”按钮，进入委托页面，将鼠标放置委托名称上，在弹窗中获取委托唯一标识码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agency' => null,
        'identifierType' => null,
        'identifiers' => null,
        'agencyId' => null
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
    * agency  该映射绑定的IAM委托名称。
    * identifierType  委托类型，分为“User”和“Group”两种。 - User表示该映射关系为针对用户的映射，identifiers中填写用户名称列表。 - Group表示该映射关系为针对用户组的映射，identifiers中填写用户组名称列表。
    * identifiers  IAM委托映射的用户（组）名称列表。请前往IAM，单击“用户（组）”按钮，获取用户（组）名称列表。
    * agencyId  该映射关系绑定的委托的的唯一标识码。请前往IAM，单击“委托”按钮，进入委托页面，将鼠标放置委托名称上，在弹窗中获取委托唯一标识码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agency' => 'agency',
            'identifierType' => 'identifier_type',
            'identifiers' => 'identifiers',
            'agencyId' => 'agency_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agency  该映射绑定的IAM委托名称。
    * identifierType  委托类型，分为“User”和“Group”两种。 - User表示该映射关系为针对用户的映射，identifiers中填写用户名称列表。 - Group表示该映射关系为针对用户组的映射，identifiers中填写用户组名称列表。
    * identifiers  IAM委托映射的用户（组）名称列表。请前往IAM，单击“用户（组）”按钮，获取用户（组）名称列表。
    * agencyId  该映射关系绑定的委托的的唯一标识码。请前往IAM，单击“委托”按钮，进入委托页面，将鼠标放置委托名称上，在弹窗中获取委托唯一标识码。
    *
    * @var string[]
    */
    protected static $setters = [
            'agency' => 'setAgency',
            'identifierType' => 'setIdentifierType',
            'identifiers' => 'setIdentifiers',
            'agencyId' => 'setAgencyId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agency  该映射绑定的IAM委托名称。
    * identifierType  委托类型，分为“User”和“Group”两种。 - User表示该映射关系为针对用户的映射，identifiers中填写用户名称列表。 - Group表示该映射关系为针对用户组的映射，identifiers中填写用户组名称列表。
    * identifiers  IAM委托映射的用户（组）名称列表。请前往IAM，单击“用户（组）”按钮，获取用户（组）名称列表。
    * agencyId  该映射关系绑定的委托的的唯一标识码。请前往IAM，单击“委托”按钮，进入委托页面，将鼠标放置委托名称上，在弹窗中获取委托唯一标识码。
    *
    * @var string[]
    */
    protected static $getters = [
            'agency' => 'getAgency',
            'identifierType' => 'getIdentifierType',
            'identifiers' => 'getIdentifiers',
            'agencyId' => 'getAgencyId'
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
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['identifierType'] = isset($data['identifierType']) ? $data['identifierType'] : null;
        $this->container['identifiers'] = isset($data['identifiers']) ? $data['identifiers'] : null;
        $this->container['agencyId'] = isset($data['agencyId']) ? $data['agencyId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['agency'] === null) {
            $invalidProperties[] = "'agency' can't be null";
        }
        if ($this->container['identifierType'] === null) {
            $invalidProperties[] = "'identifierType' can't be null";
        }
        if ($this->container['identifiers'] === null) {
            $invalidProperties[] = "'identifiers' can't be null";
        }
        if ($this->container['agencyId'] === null) {
            $invalidProperties[] = "'agencyId' can't be null";
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
    * Gets agency
    *  该映射绑定的IAM委托名称。
    *
    * @return string
    */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
    * Sets agency
    *
    * @param string $agency 该映射绑定的IAM委托名称。
    *
    * @return $this
    */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;
        return $this;
    }

    /**
    * Gets identifierType
    *  委托类型，分为“User”和“Group”两种。 - User表示该映射关系为针对用户的映射，identifiers中填写用户名称列表。 - Group表示该映射关系为针对用户组的映射，identifiers中填写用户组名称列表。
    *
    * @return string
    */
    public function getIdentifierType()
    {
        return $this->container['identifierType'];
    }

    /**
    * Sets identifierType
    *
    * @param string $identifierType 委托类型，分为“User”和“Group”两种。 - User表示该映射关系为针对用户的映射，identifiers中填写用户名称列表。 - Group表示该映射关系为针对用户组的映射，identifiers中填写用户组名称列表。
    *
    * @return $this
    */
    public function setIdentifierType($identifierType)
    {
        $this->container['identifierType'] = $identifierType;
        return $this;
    }

    /**
    * Gets identifiers
    *  IAM委托映射的用户（组）名称列表。请前往IAM，单击“用户（组）”按钮，获取用户（组）名称列表。
    *
    * @return string[]
    */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
    * Sets identifiers
    *
    * @param string[] $identifiers IAM委托映射的用户（组）名称列表。请前往IAM，单击“用户（组）”按钮，获取用户（组）名称列表。
    *
    * @return $this
    */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;
        return $this;
    }

    /**
    * Gets agencyId
    *  该映射关系绑定的委托的的唯一标识码。请前往IAM，单击“委托”按钮，进入委托页面，将鼠标放置委托名称上，在弹窗中获取委托唯一标识码。
    *
    * @return string
    */
    public function getAgencyId()
    {
        return $this->container['agencyId'];
    }

    /**
    * Sets agencyId
    *
    * @param string $agencyId 该映射关系绑定的委托的的唯一标识码。请前往IAM，单击“委托”按钮，进入委托页面，将鼠标放置委托名称上，在弹窗中获取委托唯一标识码。
    *
    * @return $this
    */
    public function setAgencyId($agencyId)
    {
        $this->container['agencyId'] = $agencyId;
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

