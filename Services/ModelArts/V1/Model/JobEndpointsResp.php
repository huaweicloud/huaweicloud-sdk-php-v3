<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobEndpointsResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobEndpointsResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ssh  ssh
    * jupyterLab  jupyterLab
    * tensorboard  tensorboard
    * mindstudioInsight  mindstudioInsight
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ssh' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SSHResp',
            'jupyterLab' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JupyterLab',
            'tensorboard' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Tensorboard',
            'mindstudioInsight' => '\HuaweiCloud\SDK\ModelArts\V1\Model\MindStudioInsight'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ssh  ssh
    * jupyterLab  jupyterLab
    * tensorboard  tensorboard
    * mindstudioInsight  mindstudioInsight
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ssh' => null,
        'jupyterLab' => null,
        'tensorboard' => null,
        'mindstudioInsight' => null
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
    * ssh  ssh
    * jupyterLab  jupyterLab
    * tensorboard  tensorboard
    * mindstudioInsight  mindstudioInsight
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ssh' => 'ssh',
            'jupyterLab' => 'jupyter_lab',
            'tensorboard' => 'tensorboard',
            'mindstudioInsight' => 'mindstudio_insight'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ssh  ssh
    * jupyterLab  jupyterLab
    * tensorboard  tensorboard
    * mindstudioInsight  mindstudioInsight
    *
    * @var string[]
    */
    protected static $setters = [
            'ssh' => 'setSsh',
            'jupyterLab' => 'setJupyterLab',
            'tensorboard' => 'setTensorboard',
            'mindstudioInsight' => 'setMindstudioInsight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ssh  ssh
    * jupyterLab  jupyterLab
    * tensorboard  tensorboard
    * mindstudioInsight  mindstudioInsight
    *
    * @var string[]
    */
    protected static $getters = [
            'ssh' => 'getSsh',
            'jupyterLab' => 'getJupyterLab',
            'tensorboard' => 'getTensorboard',
            'mindstudioInsight' => 'getMindstudioInsight'
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
        $this->container['ssh'] = isset($data['ssh']) ? $data['ssh'] : null;
        $this->container['jupyterLab'] = isset($data['jupyterLab']) ? $data['jupyterLab'] : null;
        $this->container['tensorboard'] = isset($data['tensorboard']) ? $data['tensorboard'] : null;
        $this->container['mindstudioInsight'] = isset($data['mindstudioInsight']) ? $data['mindstudioInsight'] : null;
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
    * Gets ssh
    *  ssh
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SSHResp|null
    */
    public function getSsh()
    {
        return $this->container['ssh'];
    }

    /**
    * Sets ssh
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SSHResp|null $ssh ssh
    *
    * @return $this
    */
    public function setSsh($ssh)
    {
        $this->container['ssh'] = $ssh;
        return $this;
    }

    /**
    * Gets jupyterLab
    *  jupyterLab
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JupyterLab|null
    */
    public function getJupyterLab()
    {
        return $this->container['jupyterLab'];
    }

    /**
    * Sets jupyterLab
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JupyterLab|null $jupyterLab jupyterLab
    *
    * @return $this
    */
    public function setJupyterLab($jupyterLab)
    {
        $this->container['jupyterLab'] = $jupyterLab;
        return $this;
    }

    /**
    * Gets tensorboard
    *  tensorboard
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Tensorboard|null
    */
    public function getTensorboard()
    {
        return $this->container['tensorboard'];
    }

    /**
    * Sets tensorboard
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Tensorboard|null $tensorboard tensorboard
    *
    * @return $this
    */
    public function setTensorboard($tensorboard)
    {
        $this->container['tensorboard'] = $tensorboard;
        return $this;
    }

    /**
    * Gets mindstudioInsight
    *  mindstudioInsight
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\MindStudioInsight|null
    */
    public function getMindstudioInsight()
    {
        return $this->container['mindstudioInsight'];
    }

    /**
    * Sets mindstudioInsight
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\MindStudioInsight|null $mindstudioInsight mindstudioInsight
    *
    * @return $this
    */
    public function setMindstudioInsight($mindstudioInsight)
    {
        $this->container['mindstudioInsight'] = $mindstudioInsight;
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

