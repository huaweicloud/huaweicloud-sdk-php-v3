<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicsLeaguePartnerVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicsLeaguePartnerVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  联盟合作方Id
    * partnerDomainAlias  联盟合作方别名
    * partnerDomainName  联盟合作方租户名
    * partnerStatus  联盟合作方状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'partnerDomainAlias' => 'string',
            'partnerDomainName' => 'string',
            'partnerStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  联盟合作方Id
    * partnerDomainAlias  联盟合作方别名
    * partnerDomainName  联盟合作方租户名
    * partnerStatus  联盟合作方状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'partnerDomainAlias' => null,
        'partnerDomainName' => null,
        'partnerStatus' => null
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
    * id  联盟合作方Id
    * partnerDomainAlias  联盟合作方别名
    * partnerDomainName  联盟合作方租户名
    * partnerStatus  联盟合作方状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'partnerDomainAlias' => 'partner_domain_alias',
            'partnerDomainName' => 'partner_domain_name',
            'partnerStatus' => 'partner_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  联盟合作方Id
    * partnerDomainAlias  联盟合作方别名
    * partnerDomainName  联盟合作方租户名
    * partnerStatus  联盟合作方状态
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'partnerDomainAlias' => 'setPartnerDomainAlias',
            'partnerDomainName' => 'setPartnerDomainName',
            'partnerStatus' => 'setPartnerStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  联盟合作方Id
    * partnerDomainAlias  联盟合作方别名
    * partnerDomainName  联盟合作方租户名
    * partnerStatus  联盟合作方状态
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'partnerDomainAlias' => 'getPartnerDomainAlias',
            'partnerDomainName' => 'getPartnerDomainName',
            'partnerStatus' => 'getPartnerStatus'
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
        $this->container['partnerDomainAlias'] = isset($data['partnerDomainAlias']) ? $data['partnerDomainAlias'] : null;
        $this->container['partnerDomainName'] = isset($data['partnerDomainName']) ? $data['partnerDomainName'] : null;
        $this->container['partnerStatus'] = isset($data['partnerStatus']) ? $data['partnerStatus'] : null;
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
    * Gets id
    *  联盟合作方Id
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
    * @param string|null $id 联盟合作方Id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets partnerDomainAlias
    *  联盟合作方别名
    *
    * @return string|null
    */
    public function getPartnerDomainAlias()
    {
        return $this->container['partnerDomainAlias'];
    }

    /**
    * Sets partnerDomainAlias
    *
    * @param string|null $partnerDomainAlias 联盟合作方别名
    *
    * @return $this
    */
    public function setPartnerDomainAlias($partnerDomainAlias)
    {
        $this->container['partnerDomainAlias'] = $partnerDomainAlias;
        return $this;
    }

    /**
    * Gets partnerDomainName
    *  联盟合作方租户名
    *
    * @return string|null
    */
    public function getPartnerDomainName()
    {
        return $this->container['partnerDomainName'];
    }

    /**
    * Sets partnerDomainName
    *
    * @param string|null $partnerDomainName 联盟合作方租户名
    *
    * @return $this
    */
    public function setPartnerDomainName($partnerDomainName)
    {
        $this->container['partnerDomainName'] = $partnerDomainName;
        return $this;
    }

    /**
    * Gets partnerStatus
    *  联盟合作方状态
    *
    * @return string|null
    */
    public function getPartnerStatus()
    {
        return $this->container['partnerStatus'];
    }

    /**
    * Sets partnerStatus
    *
    * @param string|null $partnerStatus 联盟合作方状态
    *
    * @return $this
    */
    public function setPartnerStatus($partnerStatus)
    {
        $this->container['partnerStatus'] = $partnerStatus;
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

