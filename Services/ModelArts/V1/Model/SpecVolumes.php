<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SpecVolumes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SpecVolumes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nfs  nfs
    * pfs  pfs
    * obs  obs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nfs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Nfs',
            'pfs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Pfs',
            'obs' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Obs'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nfs  nfs
    * pfs  pfs
    * obs  obs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nfs' => null,
        'pfs' => null,
        'obs' => null
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
    * nfs  nfs
    * pfs  pfs
    * obs  obs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nfs' => 'nfs',
            'pfs' => 'pfs',
            'obs' => 'obs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nfs  nfs
    * pfs  pfs
    * obs  obs
    *
    * @var string[]
    */
    protected static $setters = [
            'nfs' => 'setNfs',
            'pfs' => 'setPfs',
            'obs' => 'setObs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nfs  nfs
    * pfs  pfs
    * obs  obs
    *
    * @var string[]
    */
    protected static $getters = [
            'nfs' => 'getNfs',
            'pfs' => 'getPfs',
            'obs' => 'getObs'
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
        $this->container['nfs'] = isset($data['nfs']) ? $data['nfs'] : null;
        $this->container['pfs'] = isset($data['pfs']) ? $data['pfs'] : null;
        $this->container['obs'] = isset($data['obs']) ? $data['obs'] : null;
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
    * Gets nfs
    *  nfs
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Nfs|null
    */
    public function getNfs()
    {
        return $this->container['nfs'];
    }

    /**
    * Sets nfs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Nfs|null $nfs nfs
    *
    * @return $this
    */
    public function setNfs($nfs)
    {
        $this->container['nfs'] = $nfs;
        return $this;
    }

    /**
    * Gets pfs
    *  pfs
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Pfs|null
    */
    public function getPfs()
    {
        return $this->container['pfs'];
    }

    /**
    * Sets pfs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Pfs|null $pfs pfs
    *
    * @return $this
    */
    public function setPfs($pfs)
    {
        $this->container['pfs'] = $pfs;
        return $this;
    }

    /**
    * Gets obs
    *  obs
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Obs|null
    */
    public function getObs()
    {
        return $this->container['obs'];
    }

    /**
    * Sets obs
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Obs|null $obs obs
    *
    * @return $this
    */
    public function setObs($obs)
    {
        $this->container['obs'] = $obs;
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

